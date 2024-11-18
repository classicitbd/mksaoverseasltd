<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Count;
use App\Models\Partner;

class WhychooseusController extends Controller
{
    public function index()
    {
        $data['service'] = Service::select('id', 'category', 'title', 'details', 'url', 'icon', 'image')->get();
        // View()->share($service);

        $data['count'] = Count::select('id', 'client_num', 'project_num', 'support_num', 'worker_num')->get();
        // View()->share($count);

        $data['partner'] = Partner::select('id','image')->get();
        // View()->share($partner);

        return view('frontend.whychooseus.index', $data);
        
    }
}
