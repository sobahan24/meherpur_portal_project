<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];


    public function boot()
    {
        $this->registerPolicies();

        Gate::define('add', function () {
            $user = auth()->user();
            if($user->role_as == 0 || $user->role_as == 1){
                return true;
            }else{
                return false;
            }
        });

        Gate::define('edit', function () {
            $user = auth()->user();
            if($user->role_as == 0 || $user->role_as == 1){
                return true;
            }else{
                return false;
            }
        });

        Gate::define('delete', function () {
            $user = auth()->user();
            if($user->role_as == 1){
                return true;
            }else{
                return false;
            }
        });

        Gate::define('status', function () {
            $user = auth()->user();
            if($user->role_as == 1){
                return true;
            }else{
                return false;
            }
        });
    }
}
