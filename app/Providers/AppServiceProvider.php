<?php

namespace App\Providers;

//use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use PHPUnit\Event\TestRunner\BootstrapFinished;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

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
        Paginator::useBootstrapFour();

        Gate::define('admin', function (User $user) {
            return $user->is_admin;
        });
    }
}
