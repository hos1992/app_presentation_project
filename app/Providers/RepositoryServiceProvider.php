<?php

namespace App\Providers;

use App\Repositories\BaseRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\Eloquent\PageRepository;
use App\Repositories\Eloquent\PageSectionRepository;
use App\Repositories\Eloquent\SettingRepository;
use App\Repositories\PageRepositoryInterface;
use App\Repositories\PageSectionRepositoryInterface;
use App\Repositories\SettingsRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(PageRepositoryInterface::class, PageRepository::class);
        $this->app->bind(PageSectionRepositoryInterface::class, PageSectionRepository::class);
        $this->app->bind(SettingsRepositoryInterface::class, SettingRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
