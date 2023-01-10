<?php

namespace App\Providers;

use App\Models\FrontendFooter;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        //Share Footer information 
        View::composer('frontend.layouts._inc.footer', function($view){
            $view->with('frontendFooter', FrontendFooter::first());
        });
    }
}
