<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(){
        return view('back.auth.login');
    }
}
