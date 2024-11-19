<?php

namespace App\Http\Controllers;

use App\Models\Company;
// use Illuminate\Http\Request;
use Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::all();
        return view("pages.backend.company.index",compact('company'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $company = Company::find($id);
        return view("pages.backend.company.index",compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id){
        $company = Company::find($id);

        if(Request::has('txtTitle')){
            $company->title=strval(Request::input('txtTitle'));
        }

        if(Request::has('txtHeading')){
            $company->heading=strval(Request::input('txtHeading'));
        }

        if(Request::has('txtDetails')){
            $company->details=strval(Request::input('txtDetails'));
        }

        if(Request::hasFile('image')){
            $file = Request::file('image');
            $imageName = time().(rand(100,1000)).'.'.$file->extension();
            $company->image=$imageName;
            $file->move(public_path('img'), $imageName);
        }

        $company->update();
        return redirect()->back()
        ->with('success',' Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
