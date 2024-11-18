<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Frontlogo;
use App\Models\Menu;
use App\Models\Choosesection;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        //return $service;

        //View()->share($data);

        // $data['frontlogo'] = Frontlogo::select('logo_img')->first();
        // View()->share($data);
       
       // View::share($servicecategories);

       View::composer('*', function($view)
       {
        $data=Frontlogo::all(); 
        View::share('frontlogo', $data);
       });

       View::composer('*', function($view1)
       {
        $data=Menu::all(); 
        View::share('menu', $data);
       });
       
       View::composer('*', function($view2)
       {
        $data=Choosesection::all(); 
        View::share('choosesection', $data);
       });


    }
}
