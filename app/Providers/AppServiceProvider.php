<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Auth;
use App\Donar;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $lastDonationDate = date('Y-m-d');
        //BloodRequest::where('donation_date','<',$lastDonationDate)->delete();
    }
}
