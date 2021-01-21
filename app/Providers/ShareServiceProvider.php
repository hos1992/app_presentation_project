<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Setting;

class ShareServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $shared['settings'] = Setting::first();
        if ($shared['settings']) {
            $shared['settings'] = $shared['settings']->data;
        }
        view()->share([
            'shared' => $shared
        ]);
    }
}
