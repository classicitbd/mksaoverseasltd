<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Mission;

class MissionvissionController extends Controller
{
    public function index()
    {
        $data['partner'] = Partner::select('id','image')->get();
        $data['mission'] = Mission::all();

        return view('frontend.missionvission.index', $data);

    }
}
