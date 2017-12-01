<?php

namespace App\Providers;

use App\Sale;
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
        \View::composer('sales.search', function($view)  {
            $neighborhoods = Sale::pluck('neighborhood')->unique()->sort()->values()->all();
            $bedrooms = Sale::pluck('bedroom')->unique()->sort()->values()->all();
            $badrooms = Sale::pluck('badroom')->unique()->sort()->values()->all();
            $types = Sale::pluck('type')->unique()->sort()->values()->all();
            $minPrice = Sale::pluck('price')->min();
            $maxPrice = Sale::pluck('price')->max();
            $view->with([
                'bedrooms' => $bedrooms,
                'badrooms' => $badrooms,
                'types' => $types,
                'neighborhoods' => $neighborhoods,
                'minPrice' => $minPrice,
                'maxPrice' => $maxPrice
            ]);
        });
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
