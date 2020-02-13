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

use Illuminate\Support\Facades\DB;

Route::get('/', function () {

    $maxeventr = DB::select('SELECT * FROM events ORDER BY id DESC LIMIT 1 ');
    
    foreach($maxeventr as $maxevent){
                
        $event1 = DB::select('select * from events where id = ?',[$maxevent -> id]);
        
    
        $event2 = DB::select('select * from events where id = ?',[$maxevent -> id - 1]);
       
    
        $event3 = DB::select('select * from events where id = ?',[$maxevent-> id - 2]);

        $event4 = DB::select('select * from events where id = ?',[$maxevent-> id - 3]);
        
    }


    $maxpostr = DB::select('SELECT * FROM posts ORDER BY id DESC LIMIT 1 ');
    
    foreach($maxpostr as $maxpost){
        
        
        $post1 = DB::select('select * from posts where id = ?',[$maxpost -> id]);
        
    
        $post2 = DB::select('select * from posts where id = ?',[$maxpost -> id - 1]);
       
    
        $post3 = DB::select('select * from posts where id = ?',[$maxpost-> id - 2]);

        
        
    }

    
   
    return view('index',compact('event1', 'event2', 'event3' , 'event4', 'post1', 'post2', 'post3'));

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
