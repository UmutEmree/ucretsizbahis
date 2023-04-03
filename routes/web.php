<?php

use App\Post;
use App\Slider;
use App\Showcase;

Auth::routes();
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('/dogrula/{token}')->uses('Auth\RegisterController@confirmation')->name('confirmation');

Route::get('/', function () {
   
    $haftaninbonusu = Post::where('week',1)->orderby('id','desc')->get();
    $showcase = Showcase::orderby('priority','asc')->limit(10)->get();
    $incelemeler = Post::orderby('id','desc')->where('week',0)->where('home',1)->limit(5)->get();
    $sliders = Slider::orderby('priority')->limit(5)->get();

    return view('front.pages.home')->with(compact('haftaninbonusu','sonincelemeler','incelemeler','sliders','showcase'));
});

// Front Post
Route::get('inceleme/{slug}','Front\PostController@show')->name('front.post-show');
Route::get('incelemeler','Front\PostController@index')->name('front.post-index');
Route::get('bedava-bonuslar','Front\PostController@freeBonus')->name('front.bonus');
Route::get('incelemeler/{slug}','Front\PostController@showCat')->name('front.post-cat');
Route::post('destek','Front\PagesController@contactsend')->name('talep.gonder');
Route::get('destek','Front\PagesController@destek')->name('destek');
Route::get('sss','Front\PagesController@sss')->name('sss');


Route::prefix('admin')->group(function() {

  Route::resource('posts', 'Backend\PostController');
  Route::resource('categories', 'Backend\CategoriesController');
  Route::resource('showcases', 'Backend\ShowcaseController');
  Route::resource('sliders', 'Backend\SliderController');
  Route::resource('users', 'Backend\UsersController');


  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  // Password reset routes
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});
