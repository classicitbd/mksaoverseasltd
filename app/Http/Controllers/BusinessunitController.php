<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Submenu;
use App\Models\Business;
use App\Models\Additionalimage;
use App\Models\Bsctraining;
use App\Models\Diplomatraining;

class BusinessunitController extends Controller
{
    public function business_unit(Request $request){
        

        $SubmenuId = Submenu::where('submenu_url',$request->url)->select('id')->first();

        $data['BusinessData'] = Business::where('b_name',$SubmenuId->id)->first();

        $data['partner'] = Partner::select('id','image')->get();

        $data['bsctraining'] = Bsctraining::select('id','bt_name', 'bt_details', 'price', 'duration', 'icon')->get();
        
        $data['diplomatraining'] = Diplomatraining::select('id','dt_name', 'dt_details', 'price', 'duration', 'icon')->get();

        $data['multiImg'] = Additionalimage::where('bu_name',$SubmenuId->id)->select('id','image','title')->get();

        if($request->url=="trainingschedule"){
          return view('frontend.trainingschedule', $data);
        }

        
        return view('frontend.business_unit', $data);


    }
}
