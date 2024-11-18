<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Quality;

class QualitytechController extends Controller
{
    public function index()
    {

        $data['partner'] = Partner::select('id','image')->get();
        
        $data['quality'] = Quality::select('id','title', 'heading', 'details', 'image')->get();

        return view('frontend.quality&technology.index', $data);
        
    }
}
