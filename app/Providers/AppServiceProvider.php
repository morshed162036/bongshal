<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Paginator::useBootstrap();
            Paginator::useBootstrapFive();
            Paginator::useBootstrapFour();
        view()->composer(['frontend.*','frontend.layouts.*','frontend.layouts.menu','frontend.layouts.footer','frontend.index','frontend.layouts.header','backend.layout.header','backend.layout.footer','backend.layout.menu','backend.order.invoice'], function ($view) {
            $company = Setting::get()->first();
            $view->with(compact('company'));
        });

        View::creator('*', function ($view) {
            /** @var \Illuminate\View\View $view */
            $view->with('currentViewName', $view->getName());
        });
        $project_title = '| bongshal.com | Republic of Bikers';
        // $project_copyright = 'Design and Development by Ten Minutes Fact Check';
        $project_copyright = ' ©  ' . date('Y') . 'Bongshal . All Rights Reserved.';
        $name = 'Bongshal';
        View::share('title', $project_title);
        View::share('company_title', $name);
        View::share('copyright', $project_copyright);

    }
}
