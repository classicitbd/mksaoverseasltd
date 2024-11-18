<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bsctraining;

class BsctrainingController extends Controller
{
    public function index()
    {
        $bsctraining=Bsctraining::all();
        //   dd($bsctraining);
        return view("pages.backend.bsctraining.index_bsctraining",["bsctraining"=>$bsctraining]);
    }

    public function store(Request $request){
        $bsctraining=new Bsctraining;
        $bsctraining->bt_name=$request->txtBscTraining; 
        $bsctraining->bt_details=$request->txtBscTrainingDetails;
        $bsctraining->price=$request->txtPrice;
        $bsctraining->duration=$request->txtDuration;
        $bsctraining->icon=$request->txtIcon;
       
        $bsctraining->save();     
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$bsctraining=Bsctraining::find($id);
		return response()->json([
			'status'=>200,
			'bsctraining'=>$bsctraining
		]);
	}


    public function update(Request $request){
        //		$bsctraining->update($request->all());
            $bsctrainingid=$request->input('cmbBsctrainingId');
            $bsctraining = Bsctraining::find($bsctrainingid);
            $bsctraining->id=$request->cmbBsctrainingId;
            $bsctraining->bt_name=$request->txtBscTraining; 
            $bsctraining->bt_details=$request->txtBscTrainingDetails;
            $bsctraining->price=$request->txtPrice;
            $bsctraining->duration=$request->txtDuration;
            $bsctraining->icon=$request->txtIcon;
            
            $bsctraining->update();
            return redirect()->back()
            ->with('success',' Updated successfully');   
    }

    public function destroy(Request $request){  
        $bsctrainingid=$request->input('d_bsctraining');
		$bsctraining= Bsctraining::find($bsctrainingid);
		$bsctraining->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }

}
