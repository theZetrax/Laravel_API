<?php

namespace App\Providers;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator as DatabasePaginator;

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
        JsonResource::withoutWrapping();
        DatabasePaginator::useBootstrap();
    }
}
