<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminSliderController extends Controller
{
    protected $adminGuard;

    public function __construct()
    {
        $this->middleware('XSS');
        $this->adminGuard = Auth::guard('admin');
    }

    private function admin()
    {
        return $this->adminGuard;
    }

    public function index()
    {
        return $this->admin()->check()
        ? view('admin.slider.index')
        : redirect()->route('admin.login');
    }

    
}
