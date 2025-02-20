<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupControll extends Controller
{
    public function create(){
        return view('auth.signup');
    }
}
