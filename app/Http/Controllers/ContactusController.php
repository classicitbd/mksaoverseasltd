<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Contactus;

class ContactusController extends Controller
{
    public function index()
    {
        $contactus = Contactus::all();
        return view("pages.backend.contactus.index",compact('contactus'));
    }

    public function edit($id){
        $contactus = Contactus::find($id);
        return view("pages.backend.contactus.index",compact('contactus'));
    }


    public function update(Request $request,$id){
        $contactus = Contactus::find($id);

        if(Request::has('txtTitle')){
            $contactus->title=strval(Request::input('txtTitle'));
        }

        if(Request::has('txtAddress1')){
            $contactus->address_1=strval(Request::input('txtAddress1'));
        }

        if(Request::has('txtAddress2')){
            $contactus->address_2=strval(Request::input('txtAddress2'));
        }

        if(Request::has('txtEmail')){
            $contactus->email=strval(Request::input('txtEmail'));
        }

        if(Request::has('txtPhone')){
            $contactus->phone=strval(Request::input('txtPhone'));
        }

        if(Request::has('txtDetails')){
            $contactus->details=strval(Request::input('txtDetails'));
        }


        if(Request::hasFile('image')){
            $file = Request::file('image');
            $imageName = time().(rand(100,1000)).'.'.$file->extension();
            $contactus->image=$imageName;
            $file->move(public_path('img'), $imageName);
        }

        $contactus->update();
        return redirect()->back()
        ->with('success',' Updated successfully');
    }
}
