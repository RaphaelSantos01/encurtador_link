<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function generate(){
        return view('site.generate');
    }

    public function remove(){
        return view('site.remove');
    }
    public function list(){
        return view('site.list');
    }
}
