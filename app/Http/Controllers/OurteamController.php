<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Teammember;
use App\Models\Partner;

class OurteamController extends Controller
{
    public function index()
    {

        $data['team'] = Team::select('id', 'name', 'qualification', 'designation', 'details',
        'twitter', 'facebook', 'instagram', 'linkedin', 'image' )->get();

        $data['teammember'] = Teammember::select('id', 'tm_name')->get();

        $data['partner'] = Partner::select('id','image')->get();
        // View()->share($partner);

        return view('frontend.ourteam.index', $data);
        
    }
}
