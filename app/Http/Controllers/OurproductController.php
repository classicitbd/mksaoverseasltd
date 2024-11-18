<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Product;

class OurproductController extends Controller
{
    public function index()
    {

        $data['partner'] = Partner::select('id','image')->get();
        // View()->share($partner);

        $data['product'] = Product::select('id','category', 'title', 'details', 'heading', 'price', 'image')->get();
        // View()->share($partner);


        return view('frontend.ourproduct.index', $data);
        
    }
}
