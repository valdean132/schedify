<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    
    public function index(){
        return view('app.index');
    }

    public function tasks(){
        return view('app.tasks');
    }
}
