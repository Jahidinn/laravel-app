<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

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
        Paginator::useBootstrap();

        // Gate buatan sendiri untuk membatasi akses
        Gate::define('only_admin', function (User $user) {
            return $user->is_admin === 1;
        });
        Gate::define('only_verify', function (User $user) {
            if ($user->email_verified_at) {
                return true;
            }
        });
    }
}
