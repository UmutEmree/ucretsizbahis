<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(5);
        return view('front.pages.posts')->with(compact('posts'));
    }

     public function showCat($slug)
    {
        $pc = Category::where('slug',$slug)->first();
        $posts = Post::where('category_id',$pc->id)->paginate(5);
        return view('front.pages.post-cat')->with(compact('posts','pc'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $related = Post::orderby('id','asc')->limit(2)->get();
        $post = Post::where('slug',$slug)->first();
        return view('front.pages.post-detail')->with(compact('post','related'));
    }

        public function freeBonus()
    {
        $posts = Post::where('freebonus',1)->paginate(5);
        return view('front.pages.bonus')->with(compact('posts'));
    }

   
}
