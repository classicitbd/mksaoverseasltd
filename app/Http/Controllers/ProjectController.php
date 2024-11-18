<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Project;
use App\Models\Projectcategory;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $project=Project::all();
        $categories=Projectcategory::all();

        $project =DB::table('projectcategories')
            ->join('projects','projectcategories.id', '=', 'projects.category')
            ->select('projectcategories.pc_name', 'projects.*')
            ->get();
        //   dd($project);
        return view("pages.backend.project.index_project",["project"=>$project, "projectcategories"=>$categories]);
    }

    public function store(Request $request){
        $project=new Project; 
        $project->category=$request->txtCategory;
        $project->title=$request->txtTitle;
        $project->details=$request->txtDetails;
        $project->url=$request->txtURL;
       
        $project->deleted_at=$request->txtDeleted_at;
        

        if(isset($request->filePhoto)){
			$imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$project->image=$imageName;
			$project->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}

        $project->save();     
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$project=Project::find($id);
		return response()->json([
			'status'=>200,
			'project'=>$project
		]);
	}

    public function update(Request $request){
        //		$project->update($request->all());
            $projectid=$request->input('cmbProjectId');
            $project = Project::find($projectid);
            $project->id=$request->cmbProjectId;
            $project->category=$request->txtCategory;
            $project->title=$request->txtTitle;
            $project->details=$request->txtDetails;
            $project->url=$request->txtURL;
           
            $project->deleted_at=$request->txtDeleted_at;

            if(isset($request->filePhoto)){
                $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
                $project->image=$imageName;
                $request->filePhoto->move(public_path('img'),$imageName);
            }
            $project->update();
            return redirect()->back()
            ->with('success',' Updated successfully');   
    }

    public function destroy(Request $request){  
        $projectid=$request->input('d_project');
		$project= Project::find($projectid);
		$project->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
