<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Support\Facades\Input;

class SliderController extends Controller
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
       $sliders = Slider::all();
       return view('backend.pages.sliders.index')->with(compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.pages.sliders.create');
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
            'link' => 'required'
            ]);

        $slider = new Slider();
             
      if(Input::hasFile('image'))
        {
        
        $imageTempName = $request->file('image')->getPathname();
        $imageName = time() . $request->file('image')->getClientOriginalName();
        $path = base_path() . '/uploads/sliders/';
        $request->file('image')->move($path , $imageName);
        $slider->image = $imageName;
        }
       
        $slider->name = $request->name;
        $slider->link = $request->link;
        $slider->text = $request->text;
        $slider->priority = $request->priority;
       

        $slider->save();

        return redirect()->route('sliders.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sliders = Slider::all();
        $slider = Slider::find($id);
        return view('backend.pages.sliders.edit')->with(compact('slider','sliders'));
    }

      public function show($id)
    {
        $slider = Slider::find($id);
        return view('backend.pages.sliders.edit')->with(compact('slider'));
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
        $slider = Slider::find($id);
       
        if(Input::hasFile('image')){
            $imageTempName = $request->file('image')->getPathname();
              $imageName = time() . $request->file('image')->getClientOriginalName();
            $path = base_path() . '/uploads/sliders/';
            $request->file('image')->move($path , $imageName);
           
            $slider->update(array(
            'image' => $imageName,
            
            ));
        }
          $input = Input::except('_method', '_token','image');

          $slider->update($input);

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
        $slider = Slider::find($id);
        $path = base_path() . '/uploads/sliders/'. $slider->image;
         \File::delete($path);
        $slider->delete();

        return back();
    }
}
