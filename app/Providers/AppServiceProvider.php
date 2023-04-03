<?php

namespace App\Providers;
use App\Category;
use App\Post;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('category',Category::with('post')->where('menu',1)->limit(10)->get());
        view()->share('sonincelemeler',Post::orderby('id','desc')->limit(5)->get());
        view()->share('categories',Category::orderby('priority','asc')->get());
        Schema::defaultStringLength(191);

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
