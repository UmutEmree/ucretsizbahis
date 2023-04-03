<?php

namespace App\Http\Controllers\Backend;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\file;
use Illuminate\Support\Facades\Input;
class UsersController extends Controller
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
       $users = User::all();
       return view('backend.pages.users.index')->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.pages.users.create');
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
            'phone' => 'required'
            ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->status = 1;
        
        $user->save();

        return redirect()->route('users.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::orderby('name','asc')->get();
        $user = User::find($id);
        return view('backend.pages.users.edit')->with(compact('user','users'));
    }



   public function show($id)
    {
      $users = User::orderby('name','asc')->get();
        $user = User::find($id);
        return view('backend.pages.users.edit')->with(compact('user','users'));
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
        $user = User::find($id);
      if(Input::has('password')){
        $password = bcrypt($request->password);
        $user->update(array(
            'password' => $password,
            ));
      }
        $input = Input::except('_method', '_token','password');

          $user->update($input);

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
        $user = User::find($id);
        $user->delete();

        return back();
    }
}
