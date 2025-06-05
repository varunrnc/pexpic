<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminDashboardController extends BaseAdminController
{
    public function index()
    {
        return $this->admin()->check()
            ? view('admin.dashboard')
            : redirect()->route('admin.login');
    }
    public function registerView()
    {
        return $this->admin()->check()
            ? redirect()->route('admin.dashboard')
            : view('admin.signup');
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
        return $this->admin()->check()
            ? redirect()->route('admin.dashboard')
            : view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $credentials = $request->only('email', 'password');

        if ($this->admin()->attempt($credentials, $request->boolean('remember'))) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->withErrors(['error' => 'Invalid Credentials']);
    }

    public function logout()
    {
        $this->admin()->logout();
        return redirect()->route('admin.login');
    }
}
