<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Partnercategory;
use Illuminate\Http\Request;

class PartnercategoryController extends Controller
{
    public function index()
    {
        $partnercategories=Partnercategory::all();
        //   dd($servicecategories);
        return view("pages.backend.partnercategories.index_partnercategories",["partnercategories"=>$partnercategories]);
    }

    public function store(Request $request){
        $partnercategories=new Partnercategory; 
        $partnercategories->name=$request->txtCategoryOfPartner;
        $partnercategories->deleted_at=$request->txtDeleted_at;
        $partnercategories->save();
               
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$partnercategories=Partnercategory::find($id);
		return response()->json([
			'status'=>200,
			'partnercategories'=>$partnercategories
		]);
	}

    public function update(Request $request,Partnercategory $productcategories){
        $partnercategoriesid=$request->input('cmbPartnercategoriesId');
        $partnercategories = Partnercategory::find($partnercategoriesid);
        $partnercategories->id=$request->cmbPartnercategoriesId; 
        $partnercategories->name=$request->txtCategoryOfPartner;
        $partnercategories->deleted_at=$request->txtDeleted_at;		   
        $partnercategories->update();
        return redirect()->back()
        ->with('success',' Updated successfully');
    } 

    
    public function destroy(Request $request){  
        $partnercategoriesid=$request->input('d_partnercategories');
		$partnercategories= Partnercategory::find($partnercategoriesid);
		$partnercategories->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
