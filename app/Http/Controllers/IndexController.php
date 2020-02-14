<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
public function index(){
    $maxeventr = DB::select('SELECT * FROM events ORDER BY id DESC LIMIT 4 ');
      

    $maxpostr = DB::select('SELECT * FROM posts ORDER BY id DESC LIMIT 3 ');
          
   
    return view('index',compact('maxeventr', 'maxpostr'));

} 

}
