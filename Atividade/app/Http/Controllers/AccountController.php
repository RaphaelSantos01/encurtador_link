<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function register(){
        return view('site.register');
    }

    public function recover(){
        return view('site.recover');
    }

    public function login(){
        return view('site.login');
    }

    public function logout(){
        return view('site.logout');
    }
}
