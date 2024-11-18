<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;

class ContactusController extends Controller
{
    public function index()
    {
        $contactus=Contactus::all();
        //   dd($contactus);
        return view("pages.backend.contactus.index_contactus",["contactus"=>$contactus]);
    }

    public function store(Request $request){
        $contactus=new Contactus;
        $contactus->title=$request->txtTitle; 
        $contactus->heading=$request->txtHeading;
        $contactus->details=$request->txtDetails;
        $contactus->address=$request->txtAddress;
        $contactus->email=$request->txtEmail;
        $contactus->phone=$request->txtPhone;
       
        $contactus->save();     
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$contactus=Contactus::find($id);
		return response()->json([
			'status'=>200,
			'contactus'=>$contactus
		]);
	}


    public function update(Request $request){
        //	$contactus->update($request->all());
            $contactusid=$request->input('cmbContactusId');
            $contactus = Contactus::find($contactusid);
            $contactus->id=$request->cmbContactusId;
            $contactus->title=$request->txtTitle; 
            $contactus->heading=$request->txtHeading;
            $contactus->details=$request->txtDetails;
            $contactus->address=$request->txtAddress;
            $contactus->email=$request->txtEmail;
            $contactus->phone=$request->txtPhone;
            
            $contactus->update();
            return redirect()->back()
            ->with('success',' Updated successfully');   
    }

    public function destroy(Request $request){  
        $contactusid=$request->input('d_contactus');
		$contactus= Contactus::find($contactusid);
		$contactus->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
