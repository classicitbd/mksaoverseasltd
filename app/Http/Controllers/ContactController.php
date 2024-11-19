<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;

class ContactController extends Controller
{
    public function index()
    {
        $data['contactus'] = Contactus::all();
        return view('frontend.contact.index', $data);
    }
}
