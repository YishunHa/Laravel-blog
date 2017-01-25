<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::group(['middleware' => ['web']], function () {
  Route::get('/', ['uses' => 'PageController@getHome', 'as' => 'home']);

  Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle']) ->where('slug', '[\w\d\-\_]+');
  Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);

  Route::get('/about', 'PageController@getAbout');


  Route::get('/contact', 'PageController@getContact');

  Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);

  Route::post('/contact', 'PageController@postContact');

  Route::resource('posts','PostController');

});

Auth::routes();

Route::get('/home', 'HomeController@index');
