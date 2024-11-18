<?php

namespace App\Http\Controllers;

use App\Models\Frequentsection;
use Illuminate\Http\Request;

class FrequentsectionController extends Controller
{
    public function index()
    {

        $frequentsection=Frequentsection::all();
        //   dd($frequentsection);
        return view("pages.backend.frequentsection.index_frequentsection",["frequentsection"=>$frequentsection]);
    }

    public function store(Request $request){
        $frequentsection=new Frequentsection; 
        $frequentsection->fre_question=$request->txtQuestion;
        $frequentsection->fre_answer=$request->txtAnswer;

        $frequentsection->deleted_at=$request->txtDeleted_at;
        $frequentsection->save();     
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$frequentsection=Frequentsection::find($id);
		return response()->json([
			'status'=>200,
			'frequentsection'=>$frequentsection
		]);
	}

    public function update(Request $request){
        //		$frequentsection->update($request->all());
            $frequentsectionid=$request->input('cmbFrequentsectionId');
            $frequentsection = Frequentsection::find($frequentsectionid);
            $frequentsection->id=$request->cmbFrequentsectionId;
            $frequentsection->fre_question=$request->txtQuestion;
            $frequentsection->fre_answer=$request->txtAnswer;
            
            $frequentsection->deleted_at=$request->txtDeleted_at;
            $frequentsection->update();
            return redirect()->back()
            ->with('success',' Updated successfully');   
    }

    public function destroy(Request $request){  
        $frequentsectionid=$request->input('d_frequentsection');
		$frequentsection= Frequentsection::find($frequentsectionid);
		$frequentsection->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
