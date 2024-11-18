<?php

namespace App\Http\Controllers;

use App\Models\Frontlogo;
use Illuminate\Http\Request;

class FrontlogoController extends Controller
{
    public function index()
    {
        $frontlogo=Frontlogo::all();
        //   dd($frontlogo);
        return view("pages.backend.frontlogo.index_frontlogo",["frontlogo"=>$frontlogo]);
    }

    public function store(Request $request){
        $frontlogo=new Frontlogo; 
        $frontlogo->deleted_at=$request->txtDeleted_at;
        

        if(isset($request->fileLogo)){
            $logoName = time().(rand(100,1000)).'.'.$request->fileLogo->extension();
			$frontlogo->logo_img=$logoName;
			$frontlogo->update();
			$request->fileLogo->move(public_path('img'),$logoName);
		}

        $frontlogo->save();     
        return back()->with('success','Created Successfully.');
          
    }

    
    public function edit($id){
		$frontlogo=Frontlogo::find($id);
		return response()->json([
			'status'=>200,
			'frontlogo'=>$frontlogo
		]);
	}

    public function update(Request $request){
        //		$frontlogo->update($request->all());
            $frontlogoid=$request->input('cmbFrontlogoId');
            $frontlogo = Frontlogo::find($frontlogoid);
            $frontlogo->id=$request->cmbFrontlogoId;

            $frontlogo->deleted_at=$request->txtDeleted_at;

            if(isset($request->fileLogo)){
                $logoName = time().(rand(100,1000)).'.'.$request->fileLogo->extension();

                $frontlogo->logo_img=$logoName;
                $request->fileLogo->move(public_path('img'),$logoName);
            }
            $frontlogo->update();
            return redirect()->back()
            ->with('success',' Updated successfully');   
    }

    public function destroy(Request $request){  
        $frontlogoid=$request->input('d_frontlogo');
		$frontlogo= Frontlogo::find($frontlogoid);
		$frontlogo->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
