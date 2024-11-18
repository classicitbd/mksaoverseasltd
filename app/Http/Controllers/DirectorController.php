<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function index()
    {
        $director=Director::all();
        //   dd($director);
        return view("pages.backend.director.index_director",["director"=>$director]);
    }

    public function store(Request $request){
        $director=new Director; 
        $director->name=$request->txtName;
        $director->qualification=$request->txtQualification;
        $director->designation=$request->txtDesignation;
        $director->phone=$request->txtPhone;
        $director->email=$request->txtEmail;
        $director->details=$request->txtDetails;
        $director->twitter=$request->txtTwitter;
        $director->facebook=$request->txtFacebook;
        $director->pinterest=$request->txtPinterest;
        $director->linkedin=$request->txtLinkedin;

        $director->deleted_at=$request->txtDeleted_at;
        

        if(isset($request->filePhoto)){
            $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$director->image=$imageName;
			$director->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}

        $director->save();     
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$director=Director::find($id);
		return response()->json([
			'status'=>200,
			'director'=>$director
		]);
	}

    public function update(Request $request){
        //		$director->update($request->all());
            $directorid=$request->input('cmbDirectorId');
            $director = Director::find($directorid);
            $director->id=$request->cmbDirectorId;
            $director->name=$request->txtName;
            $director->qualification=$request->txtQualification;
            $director->designation=$request->txtDesignation;
            $director->phone=$request->txtPhone;
            $director->email=$request->txtEmail;
            $director->details=$request->txtDetails;
            $director->twitter=$request->txtTwitter;
            $director->facebook=$request->txtFacebook;
            $director->pinterest=$request->txtPinterest;
            $director->linkedin=$request->txtLinkedin;
            if(isset($request->filePhoto)){
                $director->image=$request->filePhoto;
                }

            $director->deleted_at=$request->txtDeleted_at;

            if(isset($request->filePhoto)){
                $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
                $director->image=$imageName;
                $request->filePhoto->move(public_path('img'),$imageName);
            }
            $director->update();
            return redirect()->back()
            ->with('success',' Updated successfully');   
    }


    public function destroy(Request $request){  
        $directorid=$request->input('d_director');
		$director= Director::find($directorid);
		$director->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }


}
