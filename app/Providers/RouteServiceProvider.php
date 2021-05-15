<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    protected $nameadminspace = 'App\Http\Controllers\Dashboard';

    protected $nameuserspace = 'App\Http\Controllers\User';

    protected $namevendorspace = 'App\Http\Controllers\Vendor';

    protected $nameagentspace = 'App\Http\Controllers\Agent';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapUserRoutes();

        $this->mapVendorRoutes();

        $this->mapAgentRoutes();

        $this->mapLanguageRoutes();

        $this->mapAdminRoutes();

    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapLanguageRoutes()
    {
        $locale = app()->getLocale();

        Route::group([
            'middleware' => 'web',
            'namespace' => $this->namespace,
            'prefix' => $locale
        ], function ($router) {
            require base_path('routes/language.php');
        });

    }
    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapVendorRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace' => $this->namevendorspace,
        ], function ($router) {
            require base_path('routes/vendor.php');
        });

    }

    protected function mapAgentRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace' => $this->nameagentspace,
        ], function ($router) {
            require base_path('routes/agent.php');
        });

    }

    protected function mapWebRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/web.php');
        });

    }

    protected function mapUserRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/user.php');
        });

    }




    protected function mapAdminRoutes()
    {
        Route::middleware('web')
             ->namespace($this->nameadminspace)
             ->group(base_path('routes/admin.php'));
    }


    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
