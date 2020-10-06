<?php

namespace App\Providers;

use App\Repositories\RepositoryInterface; 
use App\Repositories\HotelRepositoryInterface; 
use App\Repositories\Eloquent\BaseRepository; 
use App\Repositories\Eloquent\HotelRepository; 
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
		$this->app->bind(RepositoryInterface::class, BaseRepository::class);
		$this->app->bind(HotelRepositoryInterface::class, HotelRepository::class);
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
