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
        $this->mapAdminHomeSlider();
        $this->mapAdminAbout();
        $this->mapAdminFields();
        $this->mapAdminAchievements();
        $this->mapAdminClients();
        $this->mapAdminGallery();
        $this->mapAdminVideos();
        $this->mapAdminContacts();
        $this->mapAdminBlog();
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
    protected function mapAdminHomeSlider()
    {
      Route::middleware('web')
           ->prefix('cp/home-slider')
           ->name('cp.home-slider.')
           ->namespace('App\Http\Controllers')
           ->group(base_path('routes/cp/home-slider/web.php'));
    }
    protected function mapAdminAbout()
    {
      Route::middleware('web')
           ->prefix('cp/about-us')
           ->name('cp.about-us.')
           ->namespace('App\Http\Controllers')
           ->group(base_path('routes/cp/about/web.php'));
    }
    protected function mapAdminFields()
    {
      Route::middleware('web')
           ->prefix('cp/fields')
           ->name('cp.fields.')
           ->namespace('App\Http\Controllers')
           ->group(base_path('routes/cp/fields/web.php'));
    }
    protected function mapAdminAchievements()
    {
      Route::middleware('web')
           ->prefix('cp/achievements')
           ->name('cp.achievements.')
           ->namespace('App\Http\Controllers')
           ->group(base_path('routes/cp/achievements/web.php'));
    }
    protected function mapAdminClients()
    {
      Route::middleware('web')
           ->prefix('cp/clients')
           ->name('cp.clients.')
           ->namespace('App\Http\Controllers')
           ->group(base_path('routes/cp/clients/web.php'));
    }
    protected function mapAdminGallery()
    {
      Route::middleware('web')
           ->prefix('cp/gallery')
           ->name('cp.gallery.')
           ->namespace('App\Http\Controllers')
           ->group(base_path('routes/cp/gallery/web.php'));
    }
    protected function mapAdminVideos()
    {
      Route::middleware('web')
           ->prefix('cp/videos')
           ->name('cp.videos.')
           ->namespace('App\Http\Controllers')
           ->group(base_path('routes/cp/videos/web.php'));
    }
    protected function mapAdminContacts()
    {
      Route::middleware('web')
           ->prefix('cp/contacts')
           ->name('cp.contacts.')
           ->namespace('App\Http\Controllers')
           ->group(base_path('routes/cp/contacts/web.php'));
    }
    protected function mapAdminBlog()
    {
      Route::middleware('web')
           ->prefix('cp/blog')
           ->name('cp.blog.')
           ->namespace('App\Http\Controllers')
           ->group(base_path('routes/cp/blog/web.php'));
    }
}
