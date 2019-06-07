<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/posts/{post}', 'Blog/PostsController@show')
Route::get('/', 'WelcomeController@index');

Route::middleware(['auth'])->group( function(){

  Route::get('/home', 'HomeController@index')->name('home');
  Route::resource('tags', 'TagsController');
  Route::resource('categories', 'CategorisController');
  Route::resource('posts', 'PostController');
  Route::get('trashed.posts', 'PostController@trashed')->name('trashed-posts.index');
  Route::put('restore.post/{post}', 'PostController@restore') ->name('restore-post');

});

Route::middleware(['auth','admin'])->group( function(){
  Route::get('users', 'UsersController@index')->name('users.index');
  Route::post('users/{user}/make-admin', 'UsersController@makeAdmin')->name('users.make-admin');
  Route::get('users/profile' , 'UsersController@edit')->name('user.edit.profile');
  Route::put('users/profile', 'UsersController@update')->name('users.update-profile');

});
