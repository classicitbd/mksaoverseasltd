<?php

namespace App\Http\Controllers;
use App\Models\Choosesection;
// use Illuminate\Http\Request;
use Request;

class ChoosesectionController extends Controller
{
    public function index()
    {
        $choosesection=Choosesection::all();
        //   dd($choosesection);
        return view("pages.backend.choosesection.index_choosesection",["choosesection"=>$choosesection]);
    }
    

	public function edit($id){
        $choosesection=Choosesection::find($id);
        return view("pages.backend.choosesection.index_choosesection",["choosesection"=>$choosesection]);	
    }
    
    
    public function update(Request $request,$id){
        $choosesection = Choosesection::find($id);

        if(Request::has('txtSn')){
            $choosesection->sn=strval(Request::input('txtSn'));
        }

        if(Request::has('txtTitle')){
            $choosesection->title=strval(Request::input('txtTitle'));
        }
        
        if(Request::has('txtDetail')){
            $choosesection->detail=strval(Request::input('txtDetail'));
        }
        
        
        if(Request::hasFile('attach_file')){
            $file = Request::file('attach_file');
            $fileName = time().(rand(100,1000)).'.'.$file->extension();
            $choosesection->attach_file=$fileName;
            $file->move(public_path('attach-file'), $fileName);
        }

        $choosesection->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
