<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index()
    {
        $newsletter=Newsletter::all();
        //   dd($servicecategories);
        return view("pages.backend.newsletter.index_newsletter",["newsletter"=>$newsletter]);
    }

    public function store(Request $request){
        $newsletter=new Newsletter; 
        $newsletter->email=$request->txtEmail;
        $newsletter->deleted_at=$request->txtDeleted_at;
        

        $newsletter->save();     
        return redirect()->back();
          
    }

    public function destroy(Request $request){  
        $newsletterid=$request->input('d_newsletter');
		$newsletter= Newsletter::find($newsletterid);
		$newsletter->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
