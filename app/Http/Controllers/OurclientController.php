<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ourclient;

class OurclientController extends Controller
{
    public function index()
    {
        $ourclient=Ourclient::all();
        //   dd($ourclient);
        return view("pages.backend.ourclient.index_ourclient",["ourclient"=>$ourclient]);
    }

    public function store(Request $request){
        $ourclient=new Ourclient; 
        $ourclient->c_name=$request->txtClientName;
        $ourclient->c_type=$request->txtCompanyType;
        $ourclient->c_details=$request->txtCompanyDetails;
      
        $ourclient->deleted_at=$request->txtDeleted_at;
        

        if(isset($request->filePhoto)){
            $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$ourclient->logo_img=$imageName;
			$ourclient->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}

        $ourclient->save();     
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$ourclient=Ourclient::find($id);
		return response()->json([
			'status'=>200,
			'ourclient'=>$ourclient
		]);
	}


    public function update(Request $request){
        //		$ourclient->update($request->all());
            $ourclientid=$request->input('cmbOurclientId');
            $ourclient = Ourclient::find($ourclientid);
            $ourclient->id=$request->cmbOurclientId;
            $ourclient->c_name=$request->txtClientName;
            $ourclient->c_type=$request->txtCompanyType;
            $ourclient->c_details=$request->txtCompanyDetails;

            $ourclient->deleted_at=$request->txtDeleted_at;

            if(isset($request->filePhoto)){
                $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
                $ourclient->logo_img=$imageName;
                $request->filePhoto->move(public_path('img'),$imageName);
            }
            $ourclient->update();
            return redirect()->back()
            ->with('success',' Updated successfully');   
    }


    public function destroy(Request $request){  
        $ourclientid=$request->input('d_ourclient');
		$ourclient= Ourclient::find($ourclientid);
		$ourclient->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
