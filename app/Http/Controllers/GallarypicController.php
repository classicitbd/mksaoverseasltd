<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallerycategory;
use App\Models\Partner;

class GallarypicController extends Controller
{
    public function index()
    {

        $data['gallerycatrgories'] = Gallerycategory::select('id', 'gc_name', 'g_group', 'title', 'image', 'url')->get();

        $data['partner'] = Partner::select('id','image')->get();
        // View()->share($partner);

        return view('frontend.gallary.index', $data);
        
    }
}
