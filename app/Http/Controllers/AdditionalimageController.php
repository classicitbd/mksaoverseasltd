<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Additionalimage;
use App\Models\Submenu;

class AdditionalimageController extends Controller
{
    public function index()
    {
        $additionalimage=Additionalimage::all();
        $submenus=Submenu::all();

        $additionalimage =DB::table('submenus')
            ->join('additionalimages','submenus.id', '=', 'additionalimages.bu_name')
            ->select('submenus.submenu_name', 'additionalimages.*')
            ->get();
        //   dd($submenus);
        return view("pages.backend.additionalimage.index_additionalimage",["additionalimage"=>$additionalimage, "submenus"=>$submenus]);
    }

    public function store(Request $request){
        $additionalimage=new Additionalimage; 
        $additionalimage->bu_name=$request->txtBusinessUnitName;
        $additionalimage->title=$request->txtTitle;
        $additionalimage->heading=$request->txtHeading;
        $additionalimage->url=$request->txtUrl;
        $additionalimage->details=$request->txtDetails;
        $additionalimage->icon=$request->txtIcon;
        if(isset($request->filePhoto)){
            $additionalimage->image=$request->filePhoto;
            }

        $additionalimage->deleted_at=$request->txtDeleted_at;
        

        if(isset($request->filePhoto)){
            $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$additionalimage->image=$imageName;
			$additionalimage->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}

        $additionalimage->save();     
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$additionalimage=Additionalimage::find($id);
		return response()->json([
			'status'=>200,
			'additionalimage'=>$additionalimage
		]);
	}


    public function update(Request $request){
        //		$additionalimage->update($request->all());
            $additionalimageid=$request->input('cmbAdditionalimageId');
            $additionalimage = Additionalimage::find($additionalimageid);
            $additionalimage->id=$request->cmbAdditionalimageId;
            $additionalimage->bu_name=$request->txtBusinessUnitName;
            $additionalimage->title=$request->txtTitle;
            $additionalimage->heading=$request->txtHeading;
            $additionalimage->url=$request->txtUrl;
            $additionalimage->details=$request->txtDetails;
            $additionalimage->icon=$request->txtIcon;
            if(isset($request->filePhoto)){
                $additionalimage->image=$request->filePhoto;
                }
    

            $additionalimage->deleted_at=$request->txtDeleted_at;

            if(isset($request->filePhoto)){
                $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
                $additionalimage->image=$imageName;
                $request->filePhoto->move(public_path('img'),$imageName);
            }

            $additionalimage->update();
            return redirect()->back()
            ->with('success',' Updated successfully');   
    }

    public function destroy(Request $request){  
        $additionalimageid=$request->input('d_additionalimage');
		$additionalimage= Additionalimage::find($additionalimageid);
		$additionalimage->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
