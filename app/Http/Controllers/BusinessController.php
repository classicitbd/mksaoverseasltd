<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Business;
use App\Models\Submenu;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $business=Business::all();
        $submenus=Submenu::all();

        $business =DB::table('submenus')
            ->join('businesses','submenus.id', '=', 'businesses.b_name')
            ->select('submenus.submenu_name', 'businesses.*')
            ->get();
        //   dd($submenus);
        return view("pages.backend.business.index_business",["business"=>$business, "submenus"=>$submenus]);
    }



    public function store(Request $request){
        $business=new Business; 
        $business->b_name=$request->txtBusinessUnitName;
        $business->title=$request->txtTitle;
        $business->heading=$request->txtHeading;
        $business->details=$request->txtDetails;
        $business->other_title=$request->txtOtherTitle;
        $business->other_heading=$request->txtOtherHeading;
        $business->url=$request->txtURL;
        $business->deleted_at=$request->txtDeleted_at;
        

        if(isset($request->filePhoto)){
            $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$business->image=$imageName;
			$business->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}

        if(isset($request->fileAttach)){
            $attach_fileName = time().(rand(100,1000)).'.'.$request->fileAttach->extension();
			$business->attach_file=$attach_fileName;
			$business->update();
			$request->fileAttach->move(public_path('img'),$attach_fileName);
		}
        $business->save();     
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$business=Business::find($id);
		return response()->json([
			'status'=>200,
			'business'=>$business
		]);
	}


    public function update(Request $request){
        //		$business->update($request->all());
            $businessid=$request->input('cmbBusinessId');
            $business = Business::find($businessid);
            $business->id=$request->cmbBusinessId;
            $business->b_name=$request->txtBusinessUnitName;
            $business->title=$request->txtTitle;
            $business->heading=$request->txtHeading;
            $business->details=$request->txtDetails;
            $business->other_title=$request->txtOtherTitle;
            $business->other_heading=$request->txtOtherHeading;
            $business->url=$request->txtURL;
            $business->deleted_at=$request->txtDeleted_at;

            if(isset($request->filePhoto)){
                $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
                $business->image=$imageName;
                $request->filePhoto->move(public_path('img'),$imageName);
            }
    
            if(isset($request->fileAttach)){
                $attach_fileName = time().(rand(100,1000)).'.'.$request->fileAttach->extension();
                $business->attach_file=$attach_fileName;
                $request->fileAttach->move(public_path('img'),$attach_fileName);
            }
            $business->update();
            return redirect()->back()
            ->with('success',' Updated successfully');   
    }


    public function destroy(Request $request){  
        $businessid=$request->input('d_business');
		$business= Business::find($businessid);
		$business->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }

    
}
