<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Submenu;
use App\Models\Business;
use App\Models\Additionalimage;

class OtherunitController extends Controller
{
    public function business_unit(Request $request){ 

        $SubmenuId = Submenu::where('submenu_url',$request->url)->select('id')->first();

        $data['BusinessData'] = Business::where('b_name',$SubmenuId->id)->first();

        $data['partner'] = Partner::select('id','image')->get();

        $data['imgData'] = Additionalimage::where('id',$request->id)->select('id', 'heading', 'details', 'url', 'image','title')->first();

        return view('frontend.others_unit', $data);



    }
}
