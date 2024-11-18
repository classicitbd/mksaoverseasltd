<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $team=Team::all();
        return view("pages.backend.team.index_team",["team"=>$team]);
    }

    public function store(Request $request){
        $team=new Team; 
        $team->name=$request->txtName;
        $team->qualification=$request->txtQualification;
        $team->designation=$request->txtDesignation;
        $team->details=$request->txtDetails;
        $team->twitter=$request->txtTwitter;
        $team->facebook=$request->txtFacebook;
        $team->instagram=$request->txtInstagram;
        $team->linkedin=$request->txtLinkedin;

        $team->deleted_at=$request->txtDeleted_at;
        

        if(isset($request->filePhoto)){
			$imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$team->image=$imageName;
			$team->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}

        $team->save();     
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$team=Team::find($id);
		return response()->json([
			'status'=>200,
			'team'=>$team
		]);
	}

    public function update(Request $request){
        $teamid=$request->input('cmbTeamId');
        $team = Team::find($teamid);
        $team->id=$request->cmbTeamId;
        $team->name=$request->txtName;
        $team->qualification=$request->txtQualification;
        $team->designation=$request->txtDesignation;
        $team->details=$request->txtDetails;
        $team->twitter=$request->txtTwitter;
        $team->facebook=$request->txtFacebook;
        $team->instagram=$request->txtInstagram;
        $team->linkedin=$request->txtLinkedin;

            $team->deleted_at=$request->txtDeleted_at;

            if(isset($request->filePhoto)){
			    $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();

                $team->image=$imageName;
                $request->filePhoto->move(public_path('img'),$imageName);
            }

            $team->update();
            return redirect()->back()
            ->with('success',' Updated successfully');   
    }

    public function destroy(Request $request){  
        $teamid=$request->input('d_team');
		$team= Team::find($teamid);
		$team->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
