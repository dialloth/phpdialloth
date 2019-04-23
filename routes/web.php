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

//Route::get('/', function () {
    //return view('welcome');
<<<<<<< HEAD
//});
Route::get('/' , 'HomeController@index');

=======
//})
Route::get('/welcome' , 'HomeController@accueil');
>>>>>>> c50eea8653663c853a8dc0e2f6bd53820996fd68
Route::get('/articles' , 'ArticlesController@index');

Route::get('/contact' , 'ContactController@create');

Route::get('/articles/{post_name}', 'ArticlesController@show');

Route::post('/contact' , 'ContactController@store');
Route::post('comment', 'CommentController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
