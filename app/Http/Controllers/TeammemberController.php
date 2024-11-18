<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teammember;

class TeammemberController extends Controller
{
    public function index()
    {
        $teammember=Teammember::all();
        return view("pages.backend.teammember.index_teammember",["teammember"=>$teammember]);
    }

    public function store(Request $request){
        $teammember=new Teammember; 
        $teammember->tm_name=$request->txtName;
        $teammember->deleted_at=$request->txtDeleted_at;

        $teammember->save();     
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$teammember=Teammember::find($id);
		return response()->json([
			'status'=>200,
			'teammember'=>$teammember
		]);
	}

    public function update(Request $request){
        $teammemberid=$request->input('cmbTeammemberId');
        $teammember = Teammember::find($teammemberid);
        $teammember->id=$request->cmbTeammemberId;
        $teammember->tm_name=$request->txtName;
        $teammember->deleted_at=$request->txtDeleted_at;

        $teammember->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }

    public function destroy(Request $request){  
        $teammemberid=$request->input('d_teammember');
		$teammember= Teammember::find($teammemberid);
		$teammember->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
