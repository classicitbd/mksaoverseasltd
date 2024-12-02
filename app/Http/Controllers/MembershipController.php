<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membership = Membership::all();
        return view("pages.backend.membership.index", compact('membership'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $membership =new Membership;
        $membership->title =$request->txtTitle;
        $membership->heading =$request->txtHeading;
        $membership->details =$request->txtDetails;
        $membership->deleted_at=$request->txtDeleted_at;

        if(isset($request->filePhoto)){
            $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$membership->image=$imageName;
			$membership->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}
        $membership->save();
        return back()->with('success','Created Successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function show(Membership $membership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
		$membership = Membership::find($id);
		return response()->json([
			'status'=>200,
			'membership'=>$membership
		]);
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        $membershipid=$request->input('cmbmembershipId');
        $membership = Membership::find($membershipid);
        $membership->id = $request->cmbmembershipId;
        $membership->title=$request->txtTitle;
        $membership->heading=$request->txtHeading;
        $membership->details=$request->txtDetails;

        $membership->deleted_at=$request->txtDeleted_at;

        if(isset($request->filePhoto)){
            $imageName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
            $membership->image=$imageName;
            $request->filePhoto->move(public_path('img'),$imageName);
        }
        $membership->update();
        return redirect()->back()
        ->with('success',' Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        $membershipid= $request->input('d_membership');
		$membership= Membership::find($membershipid);
		$membership->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
