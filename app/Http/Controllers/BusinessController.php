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
        //$business=Business::all();
        $submenus=Submenu::all();

        $business =DB::table('submenus')
            ->join('businesses','submenus.id', '=', 'businesses.b_name')
            ->select('submenus.submenu_name', 'businesses.*')
            ->get();
        //   dd($submenus);
        return view("pages.backend.business.index_business",["business"=>$business, "submenus"=>$submenus]);
    }


    public function create()
    {
        $submenus=Submenu::all();
        return view('pages.backend.business.add_business', compact('submenus'));
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


        if(isset($request->filePhoto)){
            $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$business->image=$imageName;
			$business->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}
        $business->save();
        return redirect(route('business.index'))->with('success','Created Successfully.');

    }

    public function edit($id){
		$business=Business::find($id);
        $submenus=Submenu::all();
        return view('pages.backend.business.edit_business', compact('submenus', 'business'));
	}


    public function update(Request $request, $id){
            $business = Business::find($id);
            $business->b_name=$request->b_name;
            $business->title=$request->title;
            $business->heading=$request->heading;
            $business->details=$request->details;
            $business->other_title=$request->other_title;
            $business->other_heading=$request->other_heading;
            $business->url=$request->url;

            if(isset($request->image)){
                $imageName = time().(rand(100,1000)).'.'.$request->image->extension();
                $business->image=$imageName;
                $request->image->move(public_path('img'),$imageName);
            }
            $business->update();
            return redirect(route('business.index'))->with('success',' Updated successfully');
    }


    public function destroy(Request $request){
        $businessid=$request->input('d_business');
		$business= Business::find($businessid);
		$business->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }


}
