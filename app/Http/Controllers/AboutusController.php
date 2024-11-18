<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Aboutus;
use Request;

class AboutusController extends Controller
{
    public function index()
    {
        $aboutus=Aboutus::all();
        //   dd($aboutus);
        return view("pages.backend.aboutus.index_aboutus",["aboutus"=>$aboutus]);
    }


    public function edit($id){
        $aboutus=Aboutus::find($id);
        return view("pages.backend.aboutus.index_aboutus",["aboutus"=>$aboutus]);	
    }

    public function update(Request $request,$id){
        $aboutus = Aboutus::find($id);

        if(Request::has('txtTitle')){
            $aboutus->title=strval(Request::input('txtTitle'));
        }

        if(Request::has('txtHeading')){
            $aboutus->heading=strval(Request::input('txtHeading'));
        }
        
        if(Request::has('txtDetails')){
            $aboutus->details=strval(Request::input('txtDetails'));
        }
        
        
        if(Request::hasFile('image')){
            $file = Request::file('image');
            $imageName = time().(rand(100,1000)).'.'.$file->extension();
            $aboutus->image=$imageName;
            $file->move(public_path('img'), $imageName);
        }

        $aboutus->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
