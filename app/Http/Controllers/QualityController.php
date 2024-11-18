<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Quality;
use Request;

class QualityController extends Controller
{
    public function index()
    {
        $quality=Quality::all();
        //   dd($Quality);
        return view("pages.backend.quality-technology.index",["quality"=>$quality]);
    }


    public function edit($id){
        $quality=Quality::find($id);
        return view("pages.backend.quality-technology.index",["quality"=>$quality]);	
    }

    public function update(Request $request,$id){
        $quality = Quality::find($id);

        if(Request::has('txtTitle')){
            $quality->title=strval(Request::input('txtTitle'));
        }

        if(Request::has('txtHeading')){
            $quality->heading=strval(Request::input('txtHeading'));
        }
        
        if(Request::has('txtDetails')){
            $quality->details=strval(Request::input('txtDetails'));
        }
        
        
        if(Request::hasFile('image')){
            $file = Request::file('image');
            $imageName = time().(rand(100,1000)).'.'.$file->extension();
            $quality->image=$imageName;
            $file->move(public_path('img'), $imageName);
        }

        $quality->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
