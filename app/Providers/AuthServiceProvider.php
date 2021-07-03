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
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::resource('users', 'App\Policies\UserPolicy');
        Gate::resource('roles', 'App\Policies\RolePolicy');
        Gate::define('roles.permission', 'App\Policies\RolePolicy@permission');
        Gate::resource('posts', 'App\Policies\PostPolicy');
        // Gate::define('posts.tag', 'App\Policies\PostPolicy@tag');
        // Gate::define('posts.category', 'App\Policies\PostPolicy@category');
        Gate::resource('products', 'App\Policies\ProductPolicy');
        Gate::define('products.tag', 'App\Policies\ProductPolicy@tag');
        Gate::define('products.category', 'App\Policies\ProductPolicy@category');
    }
}
