<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

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

        //
        $this->mapAdminAdmins();
        // $this->mapAdminGuests();
        $this->mapAdminAdminsPermissions();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
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

    ////////////////////

    protected function mapAdminAdmins()
    {
      Route::middleware('web')
           ->prefix('cp/admins')
           ->name('cp.admins.')
           ->namespace('App\Http\Controllers')
           ->group(base_path('routes/cp/admins/web.php'));
    }
    // protected function mapAdminGuests()
    // {
    //   Route::middleware('web')
    //         ->prefix('cp/guests')
    //         ->name('cp.guests.')
    //         ->namespace('App\Http\Controllers')
    //        ->group(base_path('routes/cp/guests/web.php'));
    // }
    protected function mapAdminAdminsPermissions()
    {
      Route::middleware('web')
           ->prefix('cp/admins-permissions')
           ->name('cp.admins-permissions.')
           ->namespace('App\Http\Controllers')
           ->group(base_path('routes/cp/admins-permissions/web.php'));
    }
}
