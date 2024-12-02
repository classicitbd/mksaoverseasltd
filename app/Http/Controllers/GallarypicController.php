<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ourclient;
use App\Models\Partner;
use App\Models\Gallery;

class GallarypicController extends Controller
{
    public function index()
    {

        $gallery = Gallery::where('type', 1)->get();
        $video = Gallery::where('type', 2)->get();
        $client = Ourclient::select('id', 'c_name', 'logo_img')->get();
        $partner = Partner::all();
        return view('frontend.gallary.index', compact('client', 'gallery', 'video', 'partner'));

    }
}
