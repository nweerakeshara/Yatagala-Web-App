<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //

    public function index(){
        /*$postlist = DB::select('SELECT * FROM posts ORDER BY id  ')->paginate(2);*/
        $postlist = DB::table('posts')->orderBy('id', 'desc')->paginate(5);
       

        return view('posts-template', compact ('postlist'));
        /*return view('posts-template', ['postlist' => $postlist]);*/
    
    } 

}
