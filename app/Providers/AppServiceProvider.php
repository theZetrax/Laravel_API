<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Http\Resources\Json\JsonResource;
=======
use Illuminate\Contracts\Pagination\Paginator;
>>>>>>> bdc047baf52e4b0945c9dda0c3c4fe9b4693a8b5
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
<<<<<<< HEAD
        JsonResource::withoutWrapping();
=======
        DatabasePaginator::useBootstrap();
>>>>>>> bdc047baf52e4b0945c9dda0c3c4fe9b4693a8b5
    }
}
