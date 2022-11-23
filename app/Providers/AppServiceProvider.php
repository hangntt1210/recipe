<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Group;

use Session;
use Illuminate\Support\Facades\Route;

use Illuminate\Pagination\Paginator;/*dung phan trang co danh so*/

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
        view()->composer(['header', 
                        'page.detail'
                        ], function($view){
            $loai_sp = Group::all();           

            $view->with('loai_sp',$loai_sp);
        });

        Paginator::useBootstrap();/*dung phan trang co danh so*/
    }
}
