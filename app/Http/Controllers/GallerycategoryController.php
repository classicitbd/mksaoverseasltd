<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Gallerycategory;
use Illuminate\Http\Request;

class GallerycategoryController extends Controller
{
    public function index()
    {
        $gallerycategories=Gallerycategory::all();
        //   dd($servicecategories);
        return view("pages.backend.gallerycategories.index_gallerycategories",["gallerycategories"=>$gallerycategories]);
    }
    

    public function store(Request $request){
        $gallerycategories=new Gallerycategory; 
        $gallerycategories->gc_name=$request->txtCategoryOfGallery;
        $gallerycategories->g_group=$request->txtGroup;
        $gallerycategories->title=$request->txtTitle;
        $gallerycategories->url=$request->txtURL;
        $gallerycategories->deleted_at=$request->txtDeleted_at;
        
        if(isset($request->filePhoto)){
            $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$gallerycategories->image=$imageName;
			$gallerycategories->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}
        $gallerycategories->save();
               
        return back()->with('success','Created Successfully.');
          
    }
    

    public function edit($id){
		$gallerycategories=Gallerycategory::find($id);
		return response()->json([
			'status'=>200,
			'gallerycategories'=>$gallerycategories
		]);
	}

    public function update(Request $request,Gallerycategory $gallerycategories){
        $gallerycategoriesid=$request->input('cmbGallerycategoriesId');
        $gallerycategories = Gallerycategory::find($gallerycategoriesid);
        $gallerycategories->id=$request->cmbGallerycategoriesId; 
        $gallerycategories->gc_name=$request->txtCategoryOfGallery;
        $gallerycategories->g_group=$request->txtGroup;
        $gallerycategories->title=$request->txtTitle;
        $gallerycategories->url=$request->txtURL;
        $gallerycategories->deleted_at=$request->txtDeleted_at;	
        
         if(isset($request->filePhoto)){
            $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$gallerycategories->image=$imageName;
			$gallerycategories->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}
		
        $gallerycategories->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }

   
    public function destroy(Request $request){  
        $gallerycategoriesid=$request->input('d_gallerycategories');
		$gallerycategories= Gallerycategory::find($gallerycategoriesid);
		$gallerycategories->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
