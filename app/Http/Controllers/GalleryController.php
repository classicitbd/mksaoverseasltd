<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Gallery;
use App\Models\Gallerycategory;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::where('type', 1)->get();
        return view("pages.backend.galleries.index_galleries", compact('galleries'));
    }


    public function Videoindex()
    {
        $videos = Gallery::where('type', 2)->get();
        return view("pages.backend.galleries.index_video", compact('videos'));
    }


    public function store(Request $request){
        $galleries=new Gallery;
        $galleries->title=$request->txtTitle;
        $galleries->type= 1;
        if(isset($request->filePhoto)){
            $imageName = time() . rand(100, 1000) . '.' . $request->filePhoto->extension();

            $galleries->image = $imageName;
            $galleries->update();

            // Move uploaded file to a temporary location
            $request->filePhoto->move(public_path('temp'), $imageName);

            // Resize the image and save it
            $image = Image::make(public_path('temp') . '/' . $imageName);
            $image->resize(300, 400, function ($constraint) {
                $constraint->aspectRatio();
            });

            $image->save(public_path('img') . '/' . $imageName);

            // Remove the temporary file
            unlink(public_path('temp') . '/' . $imageName);
        }

        $galleries->save();
        return back()->with('success','Gallery Image Created Successfully.');

    }


    public function Videostore(Request $request){
        $galleries=new Gallery;
        $galleries->title=$request->txtTitle;
        $galleries->video=$request->txtVideo;
        $galleries->type= 2;

        $galleries->save();
        return back()->with('success','Video Uploaded Successfully.');

    }

    public function edit($id){
		$galleries=Gallery::find($id);
		return response()->json([
			'status'=>200,
			'galleries'=>$galleries
		]);
	}

    public function update(Request $request){
        $galleriesid=$request->input('cmbGalleriesId');
        $galleries = Gallery::find($galleriesid);
        $galleries->id=$request->cmbGalleriesId;
        $galleries->title=$request->txtTitle;
        $galleries->video=$request->txtVideo;

        if(isset($request->filePhoto)){
            $imageName = time() . rand(100, 1000) . '.' . $request->filePhoto->extension();

            $galleries->image = $imageName;
            $galleries->update();

            // Move uploaded file to a temporary location
            $request->filePhoto->move(public_path('temp'), $imageName);

            // Resize the image and save it
            $image = Image::make(public_path('temp') . '/' . $imageName);
            $image->resize(300, 400, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('img') . '/' . $imageName);

            // Remove the temporary file
            unlink(public_path('temp') . '/' . $imageName);
        }

        $galleries->update();
        return redirect()->back()
        ->with('success','Gallery Image Updated successfully');
    }

    public function destroy(Request $request){
        $galleriesid=$request->input('d_galleries');
        $galleries= Gallery::find($galleriesid);
        $galleries->delete();
        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
