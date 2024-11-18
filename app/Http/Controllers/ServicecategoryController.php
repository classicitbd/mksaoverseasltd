<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Servicecategory;
use App\Models\Menu;
use Illuminate\Http\Request;

class ServicecategoryController extends Controller
{
    public function index()
    {
        $servicecategories=Servicecategory::all();
        $menu=Menu::all();

        $servicecategories =DB::table('menus')
            ->join('servicecategories','menus.id', '=', 'servicecategories.sub_menu')
            ->select('menus.m_name', 'servicecategories.*')
            ->get();
        //   dd($servicecategories);
        return view("pages.backend.servicecategories.index_servicecategories",["servicecategories"=>$servicecategories, "menus"=>$menu]);
    }

    public function store(Request $request){
        $servicecategories=new Servicecategory; 
        $servicecategories->sub_menu=$request->txtSubMenu;
        $servicecategories->sc_name=$request->txtCategoryOfService;
        $servicecategories->url=$request->txtURL;
        $servicecategories->deleted_at=$request->txtDeleted_at;
        $servicecategories->save();
               
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$servicecategories=Servicecategory::find($id);
		return response()->json([
			'status'=>200,
			'servicecategories'=>$servicecategories
		]);
	}

    public function update(Request $request,Servicecategory $servicecategories){
        $servicecategoriesid=$request->input('cmbServicecategoriesId');
        $servicecategories = Servicecategory::find($servicecategoriesid);
        $servicecategories->id=$request->cmbServicecategoriesId; 
        $servicecategories->sub_menu=$request->txtSubMenu;
        $servicecategories->sc_name=$request->txtCategoryOfService;
        $servicecategories->url=$request->txtURL;
        $servicecategories->deleted_at=$request->txtDeleted_at;		   
        $servicecategories->update();
        return redirect()->back()
        ->with('success',' Updated successfully');          
    }

    public function destroy(Request $request){  
        $servicecategoriesid=$request->input('d_servicecategories');
		$servicecategories= Servicecategory::find($servicecategoriesid);
		$servicecategories->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }


}
