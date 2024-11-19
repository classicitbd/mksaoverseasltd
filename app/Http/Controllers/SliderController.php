<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view("pages.backend.slider.index",compact('sliders'));
    }


    public function create()
    {
        return view("pages.backend.slider.create");
    }


    public function store(Request $request)
    {
        $sliders = new Slider;
        $sliders->name = $request->name;
        $sliders->url = $request->url;
        $sliders->details = $request->details;
        $sliders->status = $request->status;

        if ($request->hasFile('slider_image')) {
            $imageName = time() . rand(100, 1000) . '.' . $request->slider_image->extension();

            // Save the image path to the database
            $sliders->slider_image = $imageName;

            // Save the slider before handling the image
            $sliders->save();

            // Move uploaded file to a temporary location
            $request->slider_image->move(public_path('temp'), $imageName);

            // Resize the image and save it
            $image = Image::make(public_path('temp') . '/' . $imageName);
            $image->fit(1900, 700); // Resize to exactly 1900x700 without preserving aspect ratio
            $image->save(public_path('img/slider/' . $imageName));

            // Remove the temporary file
            unlink(public_path('temp') . '/' . $imageName);
        } else {
            // Save the slider if no image is uploaded
            $sliders->save();
        }

        return redirect()->route('slider-list')->with('success', 'Slider Created Successfully.');
    }

    public function edit($id) {
        $sliders = Slider::findOrFail($id);
        return view("pages.backend.slider.edit",compact('sliders'));
    }


    public function update(Request $request, $id)
    {
        $sliders = Slider::findOrFail($id);
        $sliders->name = $request->name;
        $sliders->url = $request->url;
        $sliders->details = $request->details;
        $sliders->status = $request->status;

        if ($request->hasFile('slider_image')) {
            // Delete the old image if it exists
            if ($sliders->slider_image && file_exists(public_path('img/slider/' . $sliders->slider_image))) {
                unlink(public_path('img/slider/' . $sliders->slider_image));
            }

            // Generate a unique image name
            $imageName = time() . rand(100, 1000) . '.' . $request->slider_image->extension();
            $sliders->slider_image = $imageName;

            // Move the uploaded file to a temporary location
            $request->slider_image->move(public_path('temp'), $imageName);

            // Resize and save the image with the specified dimensions
            $image = Image::make(public_path('temp') . '/' . $imageName);

            // Fit the image to 1900x700 dimensions (cropping if necessary)
            $image->fit(1900, 700);
            $image->save(public_path('img/slider') . '/' . $imageName);

            // Remove the temporary file
            unlink(public_path('temp') . '/' . $imageName);
        }

        $sliders->save();
        return redirect()->route('slider-list')->with('success', 'Slider Updated Successfully.');
    }


    public function destroy($id)
    {
        $sliders = Slider::findOrFail($id);

        try {
            if(file_exists($sliders->slider_image)){
                unlink($sliders->slider_image);
            }
        } catch (Exception $e) {

        }
        $sliders->delete();
        return redirect()->back();
    }

}
