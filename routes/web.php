<?php

#main Pages
Route::get('/',[
  'uses' => 'HomeController@getIndex',
  'as'   => 'index'
]);

Route::get('post/{post_id}',[
  'uses' => 'HomeController@getPostIndex',
  'as'   => 'post'
]);

Route::get('about', function () {
    return view('pages.about');
})->name('about');

Route::get('contact',[
  'uses' => 'HomeController@getContact',
  'as'   => 'contact'
]);


Route::post('contact',[
  'uses' => 'HomeController@postContact',
  'as'   => 'contact'
]);

#auth Pages
Route::get('user',[
  'uses' => 'UserController@getUser',
  'as'   => 'user'
]);


Route::get('login',[
  'uses' => 'UserController@getLogin',
  'as'   => 'login'
]);

Route::get('signup',[
  'uses' => 'UserController@getSignup',
  'as'   => 'signup'
]);


Route::post('signup',[
  'uses' => 'UserController@postSignup',
  'as'   => 'signup'
]);

Auth::routes();

Route::get('/home', 'HomeController@index');
