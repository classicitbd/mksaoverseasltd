<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {

        $skill=Skill::all();
        //   dd($skill);
        return view("pages.backend.skill.index_skill",["skill"=>$skill]);
    }

    public function store(Request $request){
        $skill=new Skill; 
        $skill->skill_name=$request->txtSkill;
        $skill->skill_amount=$request->txtAmount;

        $skill->deleted_at=$request->txtDeleted_at;
        $skill->save();     
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$skill=Skill::find($id);
		return response()->json([
			'status'=>200,
			'skill'=>$skill
		]);
	}

    public function update(Request $request){
        //		$skill->update($request->all());
            $skillid=$request->input('cmbSkillId');
            $skill = Skill::find($skillid);
            $skill->id=$request->cmbSkillId;
            $skill->skill_name=$request->txtSkill;
            $skill->skill_amount=$request->txtAmount;
            
            $skill->deleted_at=$request->txtDeleted_at;
            $skill->update();
            return redirect()->back()
            ->with('success',' Updated successfully');   
    }


    public function destroy(Request $request){  
        $skillid=$request->input('d_skill');
		$skill= Skill::find($skillid);
		$skill->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
