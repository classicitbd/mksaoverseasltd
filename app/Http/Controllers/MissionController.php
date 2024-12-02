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

    }

    public function edit($id){
        $mission=Mission::find($id);
        return view("pages.backend.mission.index_mission",["mission"=>$mission]);
	}

    public function update(Request $request, $id){
        $mission = Mission::find($id);
        $mission->heading = $request->heading;
        $mission->title_one = $request->title_one;
        $mission->title_two = $request->title_two;
        $mission->short_description = $request->short_description;
        $mission->long_description = $request->long_description;


        if(isset($request->image)){
            $imageName = time().(rand(100,1000)).'.'.$request->image->extension();
            $mission->image=$imageName;
            $request->image->move(public_path('img'),$imageName);
        }


        if ($request->hasFile('multi_image')) {
            $images = [];
            foreach ($request->file('multi_image') as $image) {
                $imageName = time() . rand(100, 999) . '.' . $image->extension();
                $image->move(public_path('img'), $imageName);
                $images[] = $imageName;
            }

            $mission->multi_image = json_encode($images);
        }

            $mission->update();
            return redirect()->back()
            ->with('success',' Updated successfully');
    }


    public function destroy(Request $request){

    }
}
