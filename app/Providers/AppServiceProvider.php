<?php

namespace App\Providers;

use App\Actions\Approval;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;
use App\Actions\Refuse;

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
        Voyager::addAction(Approval::class);
        Voyager::addAction(Refuse::class);
    }
}
