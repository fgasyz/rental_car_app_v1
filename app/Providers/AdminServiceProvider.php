<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;

class AdminServiceProvider extends AppServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        Gate::define('add-car', function (User $user) {
            $currents_user_type = $user->user_type;
            if($currents_user_type == 'admin') {
                return Response::allow();
            };
            return Response::deny('You are not administrator!.');
        });
    }
}
