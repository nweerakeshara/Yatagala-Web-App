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

Route::get('/', function () {
    return view('index');
});

Route::get('/blank', function () {
    return view('blank');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/single-blog', function () {
    return view('single-blog');
});

Route::get('/events', function () {
    return view('events');
});

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

Route::get('/co-operate-org', function () {
    return view('co-operate-org');
});

Route::get('/dhayaka-sabhawa', function () {
    return view('dhayaka-sabhawa');
});


