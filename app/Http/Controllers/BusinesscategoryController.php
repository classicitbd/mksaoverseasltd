<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Models\Businesscategory;
use App\Models\Menu;
use Illuminate\Http\Request;

class BusinesscategoryController extends Controller
{
    public function index()
    {
        $businesscategories=Businesscategory::all();
        $menu=Menu::all();

        $businesscategories =DB::table('menus')
            ->join('businesscategories','menus.id', '=', 'businesscategories.sub_menu')
            ->select('menus.m_name', 'businesscategories.*')
            ->get();
        //   dd($businesscategories);
        return view("pages.backend.businesscategories.index_businesscategories",["businesscategories"=>$businesscategories, "menus"=>$menu]);
    }

    public function store(Request $request){
        $businesscategories=new Businesscategory; 
        $businesscategories->sub_menu=$request->txtSubMenu;
        $businesscategories->bc_name=$request->txtCategoryOfBusiness;
        $businesscategories->url=$request->txtURL;
        $businesscategories->deleted_at=$request->txtDeleted_at;
        $businesscategories->save();
               
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
		$businesscategories=Businesscategory::find($id);
		return response()->json([
			'status'=>200,
			'businesscategories'=>$businesscategories
		]);
	}

    public function update(Request $request,Businesscategory $businesscategories){
        $businesscategoriesid=$request->input('cmbBusinesscategoriesId');
        $businesscategories = Businesscategory::find($businesscategoriesid);
        $businesscategories->id=$request->cmbBusinesscategoriesId; 
        $businesscategories->sub_menu=$request->txtSubMenu;
        $businesscategories->bc_name=$request->txtCategoryOfBusiness;
        $businesscategories->url=$request->txtURL;
        $businesscategories->deleted_at=$request->txtDeleted_at;		   
        $businesscategories->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }

   
    public function destroy(Request $request){  
        $businesscategoriesid=$request->input('d_businesscategories');
		$businesscategories= Businesscategory::find($businesscategoriesid);
		$businesscategories->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
