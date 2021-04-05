<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

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
        //Query tất cả category
        try {
            $categoriesGlobal = Category::all();
        }catch (\Exception $exception)
        {

        }
        \View::share('categoriesGlobal', $categoriesGlobal ?? []);
    }
}
