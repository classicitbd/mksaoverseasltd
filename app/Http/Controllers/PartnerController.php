<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Partner;
use App\Models\Partnercategory;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partner=Partner::all();
        $categories=Partnercategory::all();

        $partner =DB::table('partnercategories')
            ->join('partners','partnercategories.id', '=', 'partners.category')
            ->select('partnercategories.name', 'partners.*')
            ->get();
        //   dd($partner);
        return view("pages.backend.partner.index_partner",["partner"=>$partner, "partnercategories"=>$categories]);
    }

    public function store(Request $request){
        $partner=new Partner; 
        $partner->category=$request->txtCategory;
        $partner->title=$request->txtTitle;
        $partner->details=$request->txtDetails;

        $partner->deleted_at=$request->txtDeleted_at;
        

        if(isset($request->filePhoto)){
            $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$partner->image=$imageName;
			$partner->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}

        if(isset($request->fileAttach)){
            $attach_fileName = time().(rand(100,1000)).'.'.$request->fileAttach->extension();
			$partner->attach_file=$attach_fileName;
			$partner->update();
			$request->fileAttach->move(public_path('img'),$attach_fileName);
		}
        $partner->save();
               
        return back()->with('success','Created Successfully.');
          
    }

   
    public function edit($id){
		$partner=Partner::find($id);
		return response()->json([
			'status'=>200,
			'partner'=>$partner
		]);
	}

    public function update(Request $request){
        //		$partner->update($request->all());
            $partnerid=$request->input('cmbPartnerId');
            $partner = Partner::find($partnerid);
            $partner->id=$request->cmbPartnerId;
            $partner->category=$request->txtCategory;
            $partner->title=$request->txtTitle;
            $partner->details=$request->txtDetails;
  
            $partner->deleted_at=$request->txtDeleted_at;

            if(isset($request->filePhoto)){
                $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
                $partner->image=$imageName;
                $request->filePhoto->move(public_path('img'),$imageName);
            }
    
            if(isset($request->fileAttach)){
                $attach_fileName = time().(rand(100,1000)).'.'.$request->fileAttach->extension();
                $partner->attach_file=$attach_fileName;
                $request->fileAttach->move(public_path('img'),$attach_fileName);
            }
            $partner->update();
            return redirect()->back()
            ->with('success',' Updated successfully');
        }

    public function destroy(Request $request){  
        $partnerid=$request->input('d_partner');
		$partner= Partner::find($partnerid);
		$partner->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }

}
