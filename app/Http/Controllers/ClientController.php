<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Ourclient;

class ClientController extends Controller
{
    public function index()
    {

        $data['partner'] = Partner::select('id','image')->get();
        // View()->share($partner);

        $data['ourclient'] = Ourclient::select('id','c_name', 'c_type', 'c_details', 'logo_img')->get();
        // View()->share($partner);

        return view('frontend.client.index', $data);
        
    }
}
