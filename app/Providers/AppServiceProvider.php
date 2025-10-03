<?php

namespace App\Providers;

use App\Models\AppConfiguration;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Policy;
use App\Models\Service;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Testimonial;

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
        // Share active App Config with all views
        View::composer('*', function ($view) {
            $view->with('appConfig', AppConfiguration::latest('id')->first());
        });
        // Share active testimonials with all views
        View::composer('*', function ($view) {
            $view->with('testimonials', Testimonial::where('is_active', 1)->latest('id')->get());
        });
        // Share active Galleries with all views
        View::composer('*', function ($view) {
            $view->with('galleries', Gallery::latest('id')->get());
        });
        // Share active Blogs with all views
        View::composer('*', function ($view) {
            $view->with('blogs', Blog::latest('id')->limit(6)->get());
        });

        // Share active services with all views
        View::composer('*', function ($view) {
            $view->with('services', Service::where('is_active', 1)->latest('id')->get());
        });

        // Share active policies with all views
        View::composer('*', function ($view) {
            $view->with('policies', Policy::where('is_active', 1)->get());
        });
    }
}
