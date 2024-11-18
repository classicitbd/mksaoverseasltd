<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustompageController extends Controller
{
    public function index()
    {
        return view('frontend.custompage.index');
        
    }
}
