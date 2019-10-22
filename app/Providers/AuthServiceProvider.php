<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        $this->registerHomeSliderPolicies();
        $this->registerAboutPolicies();
        $this->registerFieldsPolicies();
        $this->registerAchievmentsPolicies();
        $this->registerClientsPolicies();
        $this->registerGalleryPolicies();
        $this->registerVideosPolicies();
        $this->registerContactsPolicies();
        $this->registerBlogPolicies();
        $this->registerUsersPolicies();
        $this->registerAdminsPolicies();
        $this->registerGuestsPolicies();
        $this->registeAdminsPermissionsPolicies();
    }
    public function registerHomeSliderPolicies()
    {
      Gate::define('access-slider', function ($user) {
          return $user->hasAccess(['access-slider']);
      });
      Gate::define('create-slider', function ($user) {
          return $user->hasAccess(['create-slider']);
      });
      Gate::define('update-slider', function ($user) {
          return $user->hasAccess(['update-slider']);
      });
      Gate::define('delete-slider', function ($user) {
          return $user->hasAccess(['delete-slider']);
      });
    }
    public function registerAboutPolicies()
    {
      Gate::define('access-about', function ($user) {
          return $user->hasAccess(['access-about']);
      });
      Gate::define('create-about', function ($user) {
          return $user->hasAccess(['create-about']);
      });
      Gate::define('update-about', function ($user) {
          return $user->hasAccess(['update-about']);
      });
      Gate::define('delete-about', function ($user) {
          return $user->hasAccess(['delete-about']);
      });
    }
    public function registerFieldsPolicies()
    {
      Gate::define('access-fields', function ($user) {
          return $user->hasAccess(['access-fields']);
      });
      Gate::define('create-fields', function ($user) {
          return $user->hasAccess(['create-fields']);
      });
      Gate::define('update-fields', function ($user) {
          return $user->hasAccess(['update-fields']);
      });
      Gate::define('delete-fields', function ($user) {
          return $user->hasAccess(['delete-fields']);
      });
    }
    public function registerAchievmentsPolicies()
    {
      Gate::define('access-achievements', function ($user) {
          return $user->hasAccess(['access-achievements']);
      });
      Gate::define('create-achievements', function ($user) {
          return $user->hasAccess(['create-achievements']);
      });
      Gate::define('update-achievements', function ($user) {
          return $user->hasAccess(['update-achievements']);
      });
      Gate::define('delete-achievements', function ($user) {
          return $user->hasAccess(['delete-achievements']);
      });
    }
    public function registerClientsPolicies()
    {
      Gate::define('access-clients', function ($user) {
          return $user->hasAccess(['access-clients']);
      });
      Gate::define('create-clients', function ($user) {
          return $user->hasAccess(['create-clients']);
      });
      Gate::define('update-clients', function ($user) {
          return $user->hasAccess(['update-clients']);
      });
      Gate::define('delete-clients', function ($user) {
          return $user->hasAccess(['delete-clients']);
      });
    }
    public function registerGalleryPolicies()
    {
      Gate::define('access-gallery', function ($user) {
          return $user->hasAccess(['access-gallery']);
      });
      Gate::define('create-gallery', function ($user) {
          return $user->hasAccess(['create-gallery']);
      });
      Gate::define('update-gallery', function ($user) {
          return $user->hasAccess(['update-gallery']);
      });
      Gate::define('delete-gallery', function ($user) {
          return $user->hasAccess(['delete-gallery']);
      });
    }
    public function registerVideosPolicies()
    {
      Gate::define('access-videos', function ($user) {
          return $user->hasAccess(['access-videos']);
      });
      Gate::define('create-videos', function ($user) {
          return $user->hasAccess(['create-videos']);
      });
      Gate::define('update-videos', function ($user) {
          return $user->hasAccess(['update-videos']);
      });
      Gate::define('delete-videos', function ($user) {
          return $user->hasAccess(['delete-videos']);
      });
    }
    public function registerContactsPolicies()
    {
      Gate::define('access-contacts', function ($user) {
          return $user->hasAccess(['access-contacts']);
      });
      Gate::define('create-contacts', function ($user) {
          return $user->hasAccess(['create-contacts']);
      });
      Gate::define('update-contacts', function ($user) {
          return $user->hasAccess(['update-contacts']);
      });
      Gate::define('delete-contacts', function ($user) {
          return $user->hasAccess(['delete-contacts']);
      });
    }
    public function registerBlogPolicies()
    {
      Gate::define('access-blog', function ($user) {
          return $user->hasAccess(['access-blog']);
      });
      Gate::define('create-blog', function ($user) {
          return $user->hasAccess(['create-blog']);
      });
      Gate::define('update-blog', function ($user) {
          return $user->hasAccess(['update-blog']);
      });
      Gate::define('delete-blog', function ($user) {
          return $user->hasAccess(['delete-blog']);
      });
    }
    public function registerUsersPolicies()
    {
      Gate::define('access-users', function ($user) {
          return $user->hasAccess(['access-blog']);
      });
    }
    public function registerAdminsPolicies()
    {
      Gate::define('access-admins', function ($user) {
          return $user->hasAccess(['access-admins']);
      });
      Gate::define('create-admins', function ($user) {
          return $user->hasAccess(['create-admins']);
      });
      Gate::define('update-admins', function ($user) {
          return $user->hasAccess(['update-admins']);
      });
      Gate::define('delete-admins', function ($user) {
          return $user->hasAccess(['delete-admins']);
      });
    }
    public function registerGuestsPolicies()
    {
      Gate::define('access-guests', function ($user) {
          return $user->hasAccess(['access-guests']);
      });
    }
    public function registeAdminsPermissionsPolicies()
    {
      Gate::define('access-admins-permission', function ($user) {
          return $user->hasAccess(['access-admins-permission']);
      });
      Gate::define('create-admins-permission', function ($user) {
          return $user->hasAccess(['create-admins-permission']);
      });
      Gate::define('update-admins-permission', function ($user) {
          return $user->hasAccess(['update-admins-permission']);
      });
      Gate::define('delete-admins-permission', function ($user) {
          return $user->hasAccess(['delete-admins-permission']);
      });
    }
}
