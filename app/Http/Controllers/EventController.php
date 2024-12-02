<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;


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
        return view("pages.backend.event.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event();
        $event->title =$request->txtTitle;
        $event->heading =$request->txtHeading;
        $event->details =$request->txtDetails;

        if(isset($request->image)){
            $imageName = time().(rand(100,1000)).'.'.$request->image->extension();
            $event->image=$imageName;
            $event->update();
            $request->image->move(public_path('img'),$imageName);
        }

        $event->save();
        return redirect(route('events.index'))->with('success','Created Successfully.');
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
        return view("pages.backend.event.edit", compact('event'));
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

        $event->title =$request->txtTitle;
        $event->heading =$request->txtHeading;
        $event->details =$request->txtDetails;


        if($request->hasFile('image')){
            $file = $request->file('image');
            $imageName = time().(rand(100,1000)).'.'.$file->extension();
            $event->image=$imageName;
            $file->move(public_path('img'), $imageName);
        }

        $event->update();
        return redirect(route('events.index'))->with('success',' Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */


    public function destroy(Request $request){
        $event_id= $request->input('d_event');
        $event= Event::find($event_id);
        $event->delete();
        return redirect()->back()->with('success',' Deleted successfully');
    }
}
