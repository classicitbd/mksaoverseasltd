<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $career = Career::all();
        return view('pages.backend.career.index', compact('career'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $career = new Career();
        $career->title =$request->title;
        $career->expired_date =$request->expired_date;
        $career->details =$request->details;

        if(isset($request->image)){
            $imageName = time().(rand(100,1000)).'.'.$request->image->extension();
            $career->image=$imageName;
            $career->update();
            $request->image->move(public_path('img'),$imageName);
        }

        $career->save();
        return redirect(route('careers.index'))->with('success','Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $career = Career::find($id);
        return view('pages.backend.career.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $career = Career::find($id);

        $career->title =$request->title;
        $career->expired_date =$request->expired_date;
        $career->details =$request->details;


        if($request->hasFile('image')){
            $file = $request->file('image');
            $imageName = time().(rand(100,1000)).'.'.$file->extension();
            $career->image=$imageName;
            $file->move(public_path('img'), $imageName);
        }

        $career->update();
        return redirect(route('careers.index'))->with('success',' Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        $career_id= $request->input('d_career');
        $career= Career::find($career_id);
        $career->delete();
        return redirect()->back()->with('success',' Deleted successfully');
    }
}
