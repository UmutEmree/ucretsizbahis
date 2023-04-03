<?php

namespace App\Http\Controllers\Backend;

use App\Post;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\file;
use Illuminate\Support\Facades\Input;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {   
       $posts = Post::all();
       return view('backend.pages.posts.index')->with(compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $plast = Post::all()->last();
         $categories = Category::all();
         return view('backend.pages.posts.add-post')->with(compact('categories','plast'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[

            'name' => 'required:min3',
            'slug' => 'required|unique:posts'
            ]);

        $post = new Post();
        $post->slug = $request->slug;
        
      
  
           if(Input::hasFile('image'))
        {
        
        $imageTempName = $request->file('image')->getPathname();
        $imageName = time() . $request->file('image')->getClientOriginalName();
        $path = base_path() . '/uploads/posts/';
        $request->file('image')->move($path , $imageName);
        $post->image = $imageName;
        }
       
        $post->name = $request->name;
        $post->text = $request->text;
        $post->category_id = $request->category_id;
        $post->type = $request->type;
        $post->link = $request->link;
        $post->bonus = $request->bonus;
        $post->week = $request->week;
        $post->home = $request->home;
        $post->menu = $request->menu;
        $post->meta = $request->meta;
        $post->title = $request->title;
        $post->marka = $request->marka;
        $post->priority = $request->priority;
        $post->guven = $request->guven;
        $post->paracekme = $request->paracekme;
        $post->oranlar = $request->oranlar;
        $post->destek = $request->destek;
        $post->bonuslar = $request->bonuslar;
        $post->freebonus = $request->freebonus;
        
        $post->save();

        return redirect()->route('posts.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('backend.pages.posts.edit')->with(compact('post','categories'));
    }

      public function show($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('backend.pages.posts.edit')->with(compact('post','categories'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
          $post = Post::where('id', $request->id);
       
        if(Input::hasFile('image')){
            $imageTempName = $request->file('image')->getPathname();
              $imageName = time() . $request->file('image')->getClientOriginalName();
            $path = base_path() . '/uploads/posts/';
            $request->file('image')->move($path , $imageName);
           
            $post->update(array(
            'image' => $imageName,
            
            ));
        }
          $input = Input::except('_method', '_token','image');

          $post->update($input);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $path = base_path() . '/uploads/posts/'. $post->image;
         \File::delete($path);
        $post->delete();

        return back();
    }
}
