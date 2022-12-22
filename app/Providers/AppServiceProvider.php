<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Category;
use App\Post;

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
       
         // categories globally share to all view
         View::share('categories', Category::all());


        // LatestPost globally share to all view
         $latestPost = Post::latest()->take(3)->get();

         View::share('latestPost',$latestPost);

         $latest = Post::latest()->take(1)->get();
         View::share('latest',$latest);


         $latest = Post::latest()->take(1)->get();
         View::share('latest',$latest);

         $oldnews = Post::all()->take(3);
         View::share('oldnews',$oldnews);

         $mostviewed = Post::orderBy('view_count','DESC')->take(5)->get();
         View::share('mostviewed',$mostviewed);

        

         
       
    }
}
