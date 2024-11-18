<?php

namespace App\Http\Controllers;

use App\Models\Count;
use Illuminate\Http\Request;

class CountController extends Controller
{
    public function index()
    {

        $count=Count::all();
        //   dd($count);
        return view("pages.backend.count.index_count",["count"=>$count]);
    }

    
    public function store(Request $request){
        $count=new Count; 
        $count->client_num=$request->txtClient;
        $count->project_num=$request->txtProject;
        $count->support_num=$request->txtSupport;
        $count->worker_num=$request->txtWorker;

        $count->deleted_at=$request->txtDeleted_at;
        $count->save();     
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$count=Count::find($id);
		return response()->json([
			'status'=>200,
			'count'=>$count
		]);
	}


    public function update(Request $request){
        //		$count->update($request->all());
            $countid=$request->input('cmbCountId');
            $count = Count::find($countid);
            $count->id=$request->cmbCountId;
            $count->client_num=$request->txtClient;
            $count->project_num=$request->txtProject;
            $count->support_num=$request->txtSupport;
            $count->worker_num=$request->txtWorker;
            
            $count->deleted_at=$request->txtDeleted_at;

           
            $count->update();
            return redirect()->back()
            ->with('success',' Updated successfully');   
    }

    public function destroy(Request $request){  
        $countid=$request->input('d_count');
		$count= Count::find($countid);
		$count->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
