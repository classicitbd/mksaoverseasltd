<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Director;
use App\Models\Partner;
use App\Models\Skill;


class BoardofdirectorController extends Controller
{
    public function index()
    {
        $data['director'] = Director::select('id', 'name', 'qualification', 'designation', 'phone', 'email', 'facebook',
        'twitter', 'pinterest', 'linkedin', 'image')->get();
        // View()->share($director);

        // $data['businesscategories'] = Businesscategory::select('id', 'bc_name')->get();
        // View()->share($category);

        $data['skill'] = Skill::select('id', 'skill_name', 'skill_amount')->get();

        $data['partner'] = Partner::select('id','image')->get();

        return view('frontend.boardofdirector.index', $data);
        
    }
}
