<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;

class SitemapController extends Controller
{
    public function index()
    {

        $data['partner'] = Partner::select('id','image')->get();
        // View()->share($partner);

        return view('frontend.sitemap.index', $data);
        
    }
}
