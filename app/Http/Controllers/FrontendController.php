<?php

namespace App\Http\Controllers;

use App\Models\Frontend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Businesscategory;
use App\Models\Frontlogo;
use App\Models\Count;
use App\Models\Team;
use App\Models\Frequentsection;
use App\Models\Choosesection;
use App\Models\Projectcategory;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Event;
use App\Models\Slider;
use App\Models\Productcategory;
use App\Models\Product;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\DB;


class FrontendController extends Controller
{
    public function home()
    {
        $data['count'] = Count::select('id', 'client_num', 'project_num', 'support_num', 'worker_num')->get();
        $data['businesscategories'] = Businesscategory::select('id', 'bc_name')->get();

        $data['team'] = Team::select(
            'id',
            'name',
            'qualification',
            'designation',
            'twitter',
            'facebook',
            'instagram',
            'linkedin',
            'image'
        )->get();

        $data['choosesection'] = Choosesection::select('id','sn', 'title', 'detail', 'attach_file')->get();
        $data['partner'] = Partner::select('id','image')->get();
        $data['service'] = Service::select('id','category', 'title', 'details', 'url', 'icon', 'image')->get();
        $data['frequentsection'] = Frequentsection::select('id','fre_question', 'fre_answer')->Limit(3)->get();
        $data['frequentsection'] = Frequentsection::select('id', 'fre_question', 'fre_answer')->Limit(3)->get();
        $data['frequentsection2'] = Frequentsection::select('id', 'fre_question', 'fre_answer')->skip(3)->limit(3)->get();
        $data['projectcatrgories'] = Projectcategory::select('id', 'pc_name', 'p_group', 'title', 'image', 'url')->get();
        $data['productcategory'] = Productcategory::all();
        $data['product'] = Product::all();
        $data['sliders'] = Slider::where('status',1)->get();
        return view('frontend.home', $data);
    }

    public function event()
    {
        $data['partner'] = Partner::select('id','image')->get();
        $data['event'] = Event::all();
        return view('frontend.event.index', $data);
    }
}
