<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Partner;

class AllserviceController extends Controller
{
    public function index()
    {
        $data['service'] = Service::select('id', 'category', 'title', 'details', 'url', 'icon', 'image')->get();
        // View()->share($director);

        $data['partner'] = Partner::select('id','image')->get();
        // View()->share($partner);


        return view('frontend.allservice.index', $data);
        
    }
}
