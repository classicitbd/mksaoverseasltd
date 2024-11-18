<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Projectcategory;
use Illuminate\Http\Request;

class ProjectcategoryController extends Controller
{
    public function index()
    {
        $projectcategories=Projectcategory::all();
        //   dd($servicecategories);
        return view("pages.backend.projectcategories.index_projectcategories",["projectcategories"=>$projectcategories]);
    }

    public function store(Request $request){
        $projectcategories=new Projectcategory; 
        $projectcategories->pc_name=$request->txtCategoryOfProject;
        $projectcategories->p_group=$request->txtGroup;
        $projectcategories->title=$request->txtTitle;
        $projectcategories->url=$request->txtURL;
        
        $projectcategories->deleted_at=$request->txtDeleted_at;
        
        if(isset($request->filePhoto)){
            $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$projectcategories->image=$imageName;
			$projectcategories->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}
        $projectcategories->save();          
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$projectcategories=Projectcategory::find($id);
		return response()->json([
			'status'=>200,
			'projectcategories'=>$projectcategories
		]);
	}

    public function update(Request $request,Projectcategory $projectcategories){
        $projectcategoriesid=$request->input('cmbProjectcategoriesId');
        $projectcategories = Projectcategory::find($projectcategoriesid);
        $projectcategories->id=$request->cmbProjectcategoriesId; 
        $projectcategories->pc_name=$request->txtCategoryOfProject;
        $projectcategories->p_group=$request->txtGroup;
        $projectcategories->title=$request->txtTitle;
        $projectcategories->url=$request->txtURL;
    
        $projectcategories->deleted_at=$request->txtDeleted_at;	

        if(isset($request->filePhoto)){
            $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
            $projectcategories->image=$imageName;
            $request->filePhoto->move(public_path('img'),$imageName);
        }	   
        $projectcategories->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }

    public function destroy(Request $request){  
        $projectcategoriesid=$request->input('d_projectcategories');
		$projectcategories= Projectcategory::find($projectcategoriesid);
		$projectcategories->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
    
}
