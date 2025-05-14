<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view("web.login");
    }

    public function signup()
    {
        return view("web.signup");
    }
}
