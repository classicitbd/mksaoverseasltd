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
        $data['directorTeam'] = Team::where('type', 'Managing Director')
                                ->select('id', 'name', 'qualification', 'designation', 'details', 'type', 'twitter', 'facebook', 'instagram', 'linkedin', 'image')
                                ->get();

        $data['marketingTeam'] = Team::where('type', 'Sales & Marketing')
                                ->select('id', 'name', 'qualification', 'designation', 'details', 'type', 'twitter', 'facebook', 'instagram', 'linkedin', 'image')
                                ->get();

        $data['accountTeam'] = Team::where('type', 'Accounts Management and Executives')
                                ->select('id', 'name', 'qualification', 'designation', 'details', 'type', 'twitter', 'facebook', 'instagram', 'linkedin', 'image')
                                ->get();



        $data['teammember'] = Teammember::select('id', 'tm_name')->get();

        $data['partner'] = Partner::select('id','image')->get();

        return view('frontend.ourteam.index', $data);

    }
}
