<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Portfoliocategory;
use Illuminate\Http\Request;

class PortfoliocategoryController extends Controller
{
    public function index()
    {
        $portfoliocategories=Portfoliocategory::all();
        //   dd($portfoliocategories);
        return view("pages.backend.portfoliocategories.index_portfoliocategories",["portfoliocategories"=>$portfoliocategories]);
    }

    public function store(Request $request){
        $portfoliocategories=new Portfoliocategory; 
        $portfoliocategories->name=$request->txtCategoryOfPortfolio;
        $portfoliocategories->deleted_at=$request->txtDeleted_at;
        $portfoliocategories->save();
               
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$portfoliocategories=Portfoliocategory::find($id);
		return response()->json([
			'status'=>200,
			'portfoliocategories'=>$portfoliocategories
		]);
	}


    public function update(Request $request,Portfoliocategory $productcategories){
        $portfoliocategoriesid=$request->input('cmbPortfoliocategoriesId');
        $portfoliocategories = Portfoliocategory::find($portfoliocategoriesid);
        $portfoliocategories->id=$request->cmbPortfoliocategoriesId; 
        $portfoliocategories->name=$request->txtCategoryOfPortfolio;
        $portfoliocategories->deleted_at=$request->txtDeleted_at;		   
        $portfoliocategories->update();
        return redirect()->back()
        ->with('success',' Updated successfully');
    }

    public function destroy(Request $request){  
        $portfoliocategoriesid=$request->input('d_portfoliocategories');
		$portfoliocategories= Portfoliocategory::find($portfoliocategoriesid);
		$portfoliocategories->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
