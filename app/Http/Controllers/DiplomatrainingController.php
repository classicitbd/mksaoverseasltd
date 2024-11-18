<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diplomatraining;

class DiplomatrainingController extends Controller
{
    public function index()
    {
        $diplomatraining=Diplomatraining::all();
        //   dd($diplomatraining);
        return view("pages.backend.diplomatraining.index_diplomatraining",["diplomatraining"=>$diplomatraining]);
    }

    public function store(Request $request){
        $diplomatraining=new Diplomatraining;
        $diplomatraining->dt_name=$request->txtDiplomaTraining; 
        $diplomatraining->dt_details=$request->txtDiplomaTrainingDetails;
        $diplomatraining->price=$request->txtPrice;
        $diplomatraining->duration=$request->txtDuration;
        $diplomatraining->icon=$request->txtIcon;
       
        $diplomatraining->save();     
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$diplomatraining=Diplomatraining::find($id);
		return response()->json([
			'status'=>200,
			'diplomatraining'=>$diplomatraining
		]);
	}

    public function update(Request $request){
        //		$diplomatraining->update($request->all());
            $diplomatrainingid=$request->input('cmbDiplomatrainingId');
            $diplomatraining = Diplomatraining::find($diplomatrainingid);
            $diplomatraining->id=$request->cmbDiplomatrainingId;
            $diplomatraining->dt_name=$request->txtDiplomaTraining; 
            $diplomatraining->dt_details=$request->txtDiplomaTrainingDetails;
            $diplomatraining->price=$request->txtPrice;
            $diplomatraining->duration=$request->txtDuration;
            $diplomatraining->icon=$request->txtIcon;
            
            $diplomatraining->update();
            return redirect()->back()
            ->with('success',' Updated successfully');   
        }

        public function destroy(Request $request){  
            $diplomatrainingid=$request->input('d_diplomatraining');
            $diplomatraining= Diplomatraining::find($diplomatrainingid);
            $diplomatraining->delete();
    
            return redirect()->back()
            ->with('success',' Deleted successfully');
        }

}
