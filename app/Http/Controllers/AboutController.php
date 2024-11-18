<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Count;
use App\Models\Partner;
use App\Models\Aboutus;
use App\Models\Business;


class AboutController extends Controller
{
    public function index(Request $request)
    {
        

        $data['count'] = Count::select('id', 'client_num', 'project_num', 'support_num', 'worker_num')->get();
        // View()->share($count);

        $data['partner'] = Partner::select('id','image')->get();
        // View()->share($partner);

        $data['aboutus'] = Aboutus::select('id','title', 'heading', 'details', 'image')->get();
        // View()->share($aboutus);

        return view('frontend.about.index', $data);
        
    }

}
