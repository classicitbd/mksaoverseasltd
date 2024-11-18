<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;

class ContactController extends Controller
{
    public function index()
    {

        $data['contactus'] = Contactus::select('id','title', 'heading', 'details', 'address', 'email', 'phone')->get();
        // View()->share($partner);

        return view('frontend.contact.index', $data);
        
    }
}
