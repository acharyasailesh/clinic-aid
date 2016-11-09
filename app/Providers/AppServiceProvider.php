<?php

namespace App\Providers;

use App\About;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $about=About::all()->first();
        $phoneNo=$about->phoneNo;
        $email=$about->email;
        $description=$about->description;


        view()->share('phoneNo',$phoneNo);
        view()->share('email',$email);
        view()->share('description',$description);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
