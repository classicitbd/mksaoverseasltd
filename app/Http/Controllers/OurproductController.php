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
        $data['product'] = Product::select('id','category', 'title', 'details', 'heading', 'price', 'image')->get();
        return view('frontend.ourproduct.index', $data);

    }
}
