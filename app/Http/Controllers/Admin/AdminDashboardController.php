<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index()
    {
        if(Auth::guard("admin")->user()) {
            return view("admin.dashboard");
        }else{
            return redirect()->intended('/admin/login');
        }
    }
    public function registerView()
    {
        return view("admin.signup");
    }

    public function loginView()
    {
        return view("admin.login");
    }
}
