<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Director;
use App\Models\Partner;
use App\Models\Skill;
use App\Models\Company;
use App\Models\Membership;


class BoardofdirectorController extends Controller
{
    public function index()
    {
        $data['director'] = Director::select('id', 'name', 'qualification', 'designation', 'phone', 'email', 'facebook',
        'twitter', 'pinterest', 'linkedin', 'image')->get();
        $data['skill'] = Skill::select('id', 'skill_name', 'skill_amount')->get();
        $data['partner'] = Partner::select('id','image')->get();
        return view('frontend.boardofdirector.index', $data);

    }

    public function company()
    {
        $data['partner'] = Partner::select('id','image')->get();
        $data['company'] = Company::all();
        return view('frontend.company.index', $data);
    }

    public function membership()
    {
        $data['partner'] = Partner::select('id','image')->get();
        $data['membership'] = Membership::all();
        return view('frontend.membership.index', $data);
    }
}
