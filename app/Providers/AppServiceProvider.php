<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\MenuItem;
use App\Models\MenuSocial;
use Illuminate\Pagination\Paginator;

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
        // if($this->app->environment('production') || $this->app->environment('staging'))
        // {
        //     \URL::forceScheme('https');
        // }

        $menuItems = MenuItem::where('status', 'Enabled')->orWhere('status', 'Disabled')->get();
        view()->share('menuItems', $menuItems);

        $menusocial = MenuSocial::all();
        view()->share('menusocial', $menusocial);

        Paginator::useBootstrap();

       
    }
}
