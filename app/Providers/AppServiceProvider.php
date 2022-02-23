<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use App\Models\MetaSetting;

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
        Schema::defaultStringLength(200);
        Paginator::useBootstrap();
        $metaSettings = MetaSetting::where('meta_key', 'continous_workshop')->first();
        $continousWorkshop = $metaSettings ? $metaSettings->meta_value : "offline";
        view()->share('continousWorkshop', $continousWorkshop);
    }

}
