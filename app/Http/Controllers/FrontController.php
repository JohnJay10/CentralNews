<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;

class FrontController extends Controller
{
    public function allPost()  
    {
        // $relatedPosts = Post::where('id', "!=", $posts->id)->take(3)->get();
        $category_posts = Category::orderBy('id', 'DESC')->limit(5)->get();
        $posts = Post::where('status', 'publish')->latest()->paginate(3);
        return view('pages.index', compact('posts', 'category_posts'));
    }

    

    public function singlePost(Post $post)
    {
        $category_posts = Category::orderBy('id', 'DESC')->limit(5)->get();
        return view('pages.single-post', compact('post', 'category_posts'));
    }



    public function categoryPostNav(Category $category)
    {
        return view('pages.category-post-nav', compact('category'));
    }

   
}
