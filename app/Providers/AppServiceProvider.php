<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        // In order to not have numerous instances of a class we use the app->singleton method to work with only one single instance
        app()->singleton('App\Models\Example', function(){
            // LONGER WAY
            // $foo = config('services.foo');
            // return new \App\Models\Example($foo);
            $collaborator = new \App\Models\Collaborator();
            $foo = "mihihihi";
        
            // MORE SIMPLIFIED WAY
            return new \App\Models\Example($collaborator, $foo);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
