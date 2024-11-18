<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Productcategory;
use Illuminate\Http\Request;

class ProductcategoryController extends Controller
{
    public function index()
    {
        $productcategories=Productcategory::all();
        //   dd($productcategories);
        return view("pages.backend.productcategories.index_productcategories",["productcategories"=>$productcategories]);
    }

    public function store(Request $request){
        $productcategories=new Productcategory; 
        $productcategories->name=$request->txtCategoryOfProduct;
        $productcategories->deleted_at=$request->txtDeleted_at;
        $productcategories->save();
               
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$productcategories=Productcategory::find($id);
		return response()->json([
			'status'=>200,
			'productcategories'=>$productcategories
		]);
	}

    public function update(Request $request,Productcategory $productcategories){
        $productcategoriesid=$request->input('cmbProductcategoriesId');
        $productcategories = Productcategory::find($productcategoriesid);
        $productcategories->id=$request->cmbProductcategoriesId; 
        $productcategories->name=$request->txtCategoryOfProduct;
        $productcategories->deleted_at=$request->txtDeleted_at;		   
        $productcategories->update();
        return redirect()->back()
        ->with('success',' Updated successfully');          
    }

    public function destroy(Request $request){  
        $productcategoriesid=$request->input('d_productcategories');
		$productcategories= Productcategory::find($productcategoriesid);
		$productcategories->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
