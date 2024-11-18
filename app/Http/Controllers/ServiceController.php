<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Service;
use App\Models\Servicecategory;
use Illuminate\Http\Request;


class ServiceController extends Controller
{
    public function index()
    {
        $categories=Servicecategory::all();  
        $service=Service::all();

        $service =DB::table('servicecategories')
            ->join('services','servicecategories.id', '=', 'services.category')
            ->select('servicecategories.sc_name', 'services.*')
            ->get();
        //    dd($service);
         return view("pages.backend.service.index_service",["service"=>$service, "servicecategories"=>$categories]);
    }


    
    public function store(Request $request){
        // $service = Service::where('id',1)->first();
        $service=new Service;
        $service->category=$request->txtCategory;
        $service->title=$request->txtTitle;
        $service->details=$request->txtDetails;
        $service->url=$request->txtURL;
        $service->icon=$request->txtIcon;

        $service->deleted_at=$request->txtDeleted_at;
        

        if(isset($request->filePhoto)){
			$imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$service->image=$imageName;
			$service->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}

        if(isset($request->fileAttach)){
			$attach_fileName = (rand(100,1000)).'.'.$request->fileAttach->extension();
			$service->attach_file=$attach_fileName;
			$service->update();
			$request->fileAttach->move(public_path('img'),$attach_fileName);
		}
        $service->save();          
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$service=Service::find($id);
		return response()->json([
			'status'=>200,
			'service'=>$service
		]);
	}

    public function update(Request $request){
        //		$service->update($request->all());
            $serviceid=$request->input('cmbServiceId');
            $service = Service::find($serviceid);
            $service->id=$request->cmbServiceId;
            $service->category=$request->txtCategory;
            $service->title=$request->txtTitle;
            $service->details=$request->txtDetails;
            $service->url=$request->txtURL;
            $service->icon=$request->txtIcon;

            $service->deleted_at=$request->txtDeleted_at;

            if(isset($request->filePhoto)){
                $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
                $service->image=$imageName;
                $request->filePhoto->move(public_path('img'),$imageName);
            }
    
            if(isset($request->fileAttach)){
                $attach_fileName = time().(rand(100,1000)).'.'.$request->fileAttach->extension();
                $service->attach_file=$attach_fileName;
                $request->fileAttach->move(public_path('img'),$attach_fileName);
            }
            $service->update();
            return redirect()->back()
            ->with('success',' Updated successfully');   
    }

    public function destroy(Request $request){  
        $serviceid=$request->input('d_service');
		$service= Service::find($serviceid);
		$service->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
