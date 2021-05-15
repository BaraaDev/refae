<?php

namespace App\Providers;

use App\Models\News as AppNews;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use News;

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
    public function boot(Request $request)
    {

        view()->share('blogz', AppNews::where('status', 'publish')->latest()->take(4)->get());

        Schema::defaultStringLength(191);

    }
}
