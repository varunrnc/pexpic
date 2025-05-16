<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('XSS');
    }
    public function index()
    {
        if (Auth::guard('admin')->user()) {
            return view('admin.dashboard');
        } else {
            return redirect()->route('admin.login');
        }
    }
    public function registerView()
    {
        if (Auth::guard('admin')->user()) {
            return redirect()->route('admin.dashboard');
        } else {
            return view('admin.signup');
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'input_name' => 'required|max:20',
            'input_email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $admin = new Admin();
        $admin->name = $request->input_name;
        $admin->email = $request->input_email;
        $admin->password = $request->password;
        $admin->save();
        return redirect()->route('admin.login');
    }

    public function loginView()
    {
        if(Auth::guard('admin')->user()) {
            return redirect()->route('admin.dashboard');
        }else{
            return view('admin.login');
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $admin = Admin::Where('email', $request->only('email'))->first();
        if($admin == null) {
            return redirect()->back()->withErrors(['error' => 'Email Not Found!']);
        }

        $credentials = $request->only('email', 'password');

        if(Auth::guard('admin')->attempt($credentials, $request->boolean('remember'))){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->back()->withErrors(['error' => 'Invalid Credentials']);
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
