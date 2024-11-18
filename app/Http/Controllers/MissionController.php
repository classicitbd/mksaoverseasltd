<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function index()
    {
        $mission=Mission::all();
        return view("pages.backend.mission.index_mission",["mission"=>$mission]);
    }

    public function store(Request $request){
        $mission=new Mission; 
        $mission->name=$request->txtName;
        $mission->details=$request->txtDetails;

        $mission->deleted_at=$request->txtDeleted_at;
        

        if(isset($request->filePhoto)){
            $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$mission->image=$imageName;
			$mission->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}

        $mission->save();     
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$mission=Mission::find($id);
		return response()->json([
			'status'=>200,
			'mission'=>$mission
		]);
	}

    public function update(Request $request){
        $missionid=$request->input('cmbMissionId');
        $mission = Mission::find($missionid);
        $mission->id=$request->cmbMissionId;
        $mission->name=$request->txtName;
        $mission->details=$request->txtDetails;
            $mission->deleted_at=$request->txtDeleted_at;

            if(isset($request->filePhoto)){
                $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
                $mission->image=$imageName;
                $request->filePhoto->move(public_path('img'),$imageName);
            }

            $mission->update();
            return redirect()->back()
            ->with('success',' Updated successfully');   
    }


    public function destroy(Request $request){  
        $missionid=$request->input('d_mission');
		$mission= Mission::find($missionid);
		$mission->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
