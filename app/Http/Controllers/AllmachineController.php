<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allmachine;

class AllmachineController extends Controller
{
    public function index()
    {
        $allmachine=Allmachine::all();
        //   dd($allmachine);
        return view("pages.backend.allmachine.index_allmachine",["allmachine"=>$allmachine]);
    }

    public function store(Request $request){
        $allmachine=new Allmachine; 
        $allmachine->am_name=$request->txtCategoryOfMachine;
        $allmachine->am_group=$request->txtGroup;
        $allmachine->title=$request->txtTitle;
        $allmachine->url=$request->txtURL;
        if(isset($request->filePhoto)){
            $allmachine->image=$request->filePhoto;
            }

        $allmachine->deleted_at=$request->txtDeleted_at;
        
        if(isset($request->filePhoto)){
            $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$allmachine->image=$imageName;
			$allmachine->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}
        $allmachine->save();          
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$allmachine=Allmachine::find($id);
		return response()->json([
			'status'=>200,
			'allmachine'=>$allmachine
		]);
	}

    public function update(Request $request,Allmachine $allmachine){
        $allmachineid=$request->input('cmbAllmachineId');
        $allmachine = Allmachine::find($allmachineid);
        $allmachine->id=$request->cmbAllmachineId; 
        $allmachine->am_name=$request->txtCategoryOfMachine;
        $allmachine->am_group=$request->txtGroup;
        $allmachine->title=$request->txtTitle;
        $allmachine->url=$request->txtURL;
        if(isset($request->filePhoto)){
            $allmachine->image=$request->filePhoto;
            }

        $allmachine->deleted_at=$request->txtDeleted_at;	

        if(isset($request->filePhoto)){
            $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
            $allmachine->image=$imageName;
            $request->filePhoto->move(public_path('img'),$imageName);
        }	   
        $allmachine->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }

    public function destroy(Request $request){  
        $allmachineid=$request->input('d_allmachine');
		$allmachine= Allmachine::find($allmachineid);
		$allmachine->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}