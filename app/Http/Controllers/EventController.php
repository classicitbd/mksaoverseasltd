<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::all();
        return view("pages.backend.event.index", compact('event'));
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
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $event = Event::find($id);
        return view("pages.backend.event.index", compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id){
        $event = Event::find($id);

        if(Request::has('txtTitle')){
            $event->title=strval(Request::input('txtTitle'));
        }

        if(Request::has('txtHeading')){
            $event->heading=strval(Request::input('txtHeading'));
        }

        if(Request::has('txtDetails')){
            $event->details=strval(Request::input('txtDetails'));
        }


        if(Request::hasFile('image')){
            $file = Request::file('image');
            $imageName = time().(rand(100,1000)).'.'.$file->extension();
            $event->image=$imageName;
            $file->move(public_path('img'), $imageName);
        }

        $event->update();
        return redirect()->back()
        ->with('success',' Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
