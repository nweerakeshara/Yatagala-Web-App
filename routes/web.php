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

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\DB;

Route::get('/', 'IndexController@index');


Route::get('/posts', 'PostController@index'); 
 

Route::get('/single-blog', function () {
    return view('single-blog');
});

Route::get('/events', 'EventController@index');


Route::get('/sunday-school', function () {
    return view('sunday-school');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/pirivena', function () {
    return view('pirivena');
});

Route::get('/cyber-edu', function () {
    return view('cyber-edu');
});

Route::get('/organization', function () {
    return view('organization');
});


Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/test', function () {
    $tresult = DB::select('select * from posts');
    return $tresult;
});
