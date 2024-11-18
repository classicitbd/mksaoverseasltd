<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Aboutcategory;
use Illuminate\Http\Request;

class AboutcategoryController extends Controller
{
    public function index()
    {
        $aboutcategories=Aboutcategory::all();
        //   dd($servicecategories);
        return view("pages.backend.aboutcategories.index_aboutcategories",["aboutcategories"=>$aboutcategories]);
    }

    public function store(Request $request){
        $aboutcategories=new Aboutcategory; 
        $aboutcategories->name=$request->txtCategoryOfAbout;
        $aboutcategories->deleted_at=$request->txtDeleted_at;
        $aboutcategories->save();
               
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$aboutcategories=Aboutcategory::find($id);
		return response()->json([
			'status'=>200,
			'aboutcategories'=>$aboutcategories
		]);
	}

    public function update(Request $request,Aboutcategory $aboutcategories){
        $aboutcategoriesid=$request->input('cmbAboutcategoriesId');
        $aboutcategories = Aboutcategory::find($aboutcategoriesid);
        $aboutcategories->id=$request->cmbAboutcategoriesId; 
        $aboutcategories->name=$request->txtCategoryOfAbout;
        $aboutcategories->deleted_at=$request->txtDeleted_at;		   
        $aboutcategories->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }

    public function destroy(Request $request){  
        $aboutcategoriesid=$request->input('d_aboutcategories');
		$aboutcategories= Aboutcategory::find($aboutcategoriesid);
		$aboutcategories->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
