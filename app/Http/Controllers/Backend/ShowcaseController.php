<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Showcase;
use Illuminate\Support\Facades\Input;

class ShowcaseController extends Controller
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
       $showcase = Showcase::all();
       return view('backend.pages.showcase.index')->with(compact('showcase'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.pages.showcase.create');
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
            'link' => 'required|'
            ]);

        $showcase = new Showcase();
             
      if(Input::hasFile('image'))
           if(Input::hasFile('image'))
        {
        
        $imageTempName = $request->file('image')->getPathname();
        $imageName = time() . $request->file('image')->getClientOriginalName();
        $path = base_path() . '/uploads/showcases/';
        $request->file('image')->move($path , $imageName);
        $showcase->image = $imageName;
        }
       
        $showcase->name = $request->name;
        $showcase->link = $request->link;
        $showcase->priority = $request->priority;
       

        $showcase->save();

        return redirect()->route('showcases.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $showcases = Showcase::all();
        $showcase = Showcase::find($id);
        return view('backend.pages.showcase.edit')->with(compact('showcase','showcases'));
    }

      public function show($id)
    {
        $showcase = Showcase::find($id);
        return view('backend.pages.showcase.edit')->with(compact('showcase'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
       public function update(Request $request, $id)
    {
        $showcase = Showcase::find($id);
       
        if(Input::hasFile('image')){
            $imageTempName = $request->file('image')->getPathname();
              $imageName = time() . $request->file('image')->getClientOriginalName();
            $path = base_path() . '/uploads/showcases/';
            $request->file('image')->move($path , $imageName);
           
            $showcase->update(array(
            'image' => $imageName,
            
            ));
        }
          $input = Input::except('_method', '_token','image');

          $showcase->update($input);

          return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $showcase = Showcase::find($id);
        $path = base_path() . '/uploads/showcases/'. $showcase->image;
         \File::delete($path);
        $showcase->delete();

        return back();
    }
}
