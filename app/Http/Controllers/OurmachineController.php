<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Allmachine;

class OurmachineController extends Controller
{
    public function index()
    {

        $data['partner'] = Partner::select('id','image')->get();

        $data['allmachine'] = Allmachine::select('id', 'am_name', 'am_group', 'title', 'image', 'url')->get();

        return view('frontend.ourmachine.index', $data);
        
    }
}
