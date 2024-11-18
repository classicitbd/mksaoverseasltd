<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allproject;

class AllprojectController extends Controller
{
    public function index()
    {
        $allproject=Allproject::all();
        //   dd($allproject);
        return view("pages.backend.allproject.index_allproject",["allproject"=>$allproject]);
    }

    public function store(Request $request){
        $allproject=new Allproject; 
        $allproject->ap_name=$request->txtCategoryOfProject;
        $allproject->ap_group=$request->txtGroup;
        $allproject->title=$request->txtTitle;
        $allproject->url=$request->txtURL;
        if(isset($request->filePhoto)){
            $allproject->image=$request->filePhoto;
            }

        $allproject->deleted_at=$request->txtDeleted_at;
        
        if(isset($request->filePhoto)){
            $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$allproject->image=$imageName;
			$allproject->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}
        $allproject->save();          
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$allproject=Allproject::find($id);
		return response()->json([
			'status'=>200,
			'allproject'=>$allproject
		]);
	}

    public function update(Request $request,Allproject $allproject){
        $allprojectid=$request->input('cmbAllprojectId');
        $allproject = Allproject::find($allprojectid);
        $allproject->id=$request->cmbAllprojectId; 
        $allproject->ap_name=$request->txtCategoryOfProject;
        $allproject->ap_group=$request->txtGroup;
        $allproject->title=$request->txtTitle;
        $allproject->url=$request->txtURL;
        if(isset($request->filePhoto)){
            $allproject->image=$request->filePhoto;
            }

        $allproject->deleted_at=$request->txtDeleted_at;	

        if(isset($request->filePhoto)){
            $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
            $allproject->image=$imageName;
            $request->filePhoto->move(public_path('img'),$imageName);
        }	   
        $allproject->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }

    public function destroy(Request $request){  
        $allprojectid=$request->input('d_allproject');
		$allproject= Allproject::find($allprojectid);
		$allproject->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
