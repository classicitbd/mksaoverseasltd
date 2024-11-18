<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allproject;
use App\Models\Partner;


class ProjectlistController extends Controller
{
    public function index()
    {
        $data['allproject'] = Allproject::select('id', 'ap_name', 'ap_group', 'title', 'image', 'url')->get();
        // View()->share($director);

        $data['partner'] = Partner::select('id','image')->get();
        // View()->share($partner);


        return view('frontend.projectlist.index', $data);
        
    }
}
