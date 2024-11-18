<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile=Profile::all();
        //   dd($Product);
        return view("pages.backend.profile.index_profile",["profile"=>$profile]);
    }
}
