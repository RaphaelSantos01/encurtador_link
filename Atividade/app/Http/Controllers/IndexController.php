<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('site.index');
    }

    public function redirect(){
        return view('site.redirect');
    }
}
