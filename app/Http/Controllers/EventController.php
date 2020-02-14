<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{

    public function index(){
        $eventlist = DB::select('SELECT * FROM events ORDER BY id  ');
       

        return view('events-template', compact ('eventlist'));
    
    } 

    //
}
