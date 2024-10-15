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
    
    public function calendar(){
        return view('app.calendar');
    }

    public function settings(){
        return view('app.settings');
    }

    public function help(){
        return view('app.help');
    }

    public function profile(){
        return view('app.profile');
    }
}
