<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Gallery;
use App\Models\Gallerycategory;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries=Gallery::all();
        $categories=Gallerycategory::all();

        $galleries =DB::table('gallerycategories')
            ->join('galleries','gallerycategories.id', '=', 'galleries.category')
            ->select('gallerycategories.name', 'galleries.*')
            ->get();
        //   dd($gallerycategories);
        return view("pages.backend.galleries.index_galleries",["galleries"=>$galleries, "gallerycategories"=>$categories]);
    }

    public function store(Request $request){
        $galleries=new Gallery; 
        $galleries->category=$request->txtCategory;
        $galleries->title=$request->txtTitle;
        $galleries->details=$request->txtDetails;

        $galleries->deleted_at=$request->txtDeleted_at;
        

        if(isset($request->filePhoto)){
            $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();

			$galleries->image=$imageName;
			$galleries->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}

        if(isset($request->fileAttach)){
            $attach_fileName = time().(rand(100,1000)).'.'.$request->fileAttach->extension();
			$galleries->attach_file=$attach_fileName;
			$galleries->update();
			$request->fileAttach->move(public_path('img'),$attach_fileName);
		}
        $galleries->save();
               
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$galleries=Gallery::find($id);
		return response()->json([
			'status'=>200,
			'galleries'=>$galleries
		]);
	}

    public function update(Request $request){
        //	$galleries->update($request->all());
            $galleriesid=$request->input('cmbGalleriesId');
            $galleries = Gallery::find($galleriesid);
            $galleries->id=$request->cmbGalleriesId;
            $galleries->category=$request->txtCategory;
            $galleries->title=$request->txtTitle;
            $galleries->details=$request->txtDetails;
          
            $galleries->deleted_at=$request->txtDeleted_at;

            if(isset($request->filePhoto)){
                $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
                $galleries->image=$imageName;
                $request->filePhoto->move(public_path('img'),$imageName);
            }
    
            if(isset($request->fileAttach)){
                $attach_fileName = time().(rand(100,1000)).'.'.$request->fileAttach->extension();
                $galleries->attach_file=$attach_fileName;
                $request->fileAttach->move(public_path('img'),$attach_fileName);
            }
            $galleries->update();
            return redirect()->back()
            ->with('success',' Updated successfully');   
    }

    
        public function destroy(Request $request){  
            $galleriesid=$request->input('d_galleries');
            $galleries= Gallery::find($galleriesid);
            $galleries->delete();

            return redirect()->back()
            ->with('success',' Deleted successfully');
        }

  
}
