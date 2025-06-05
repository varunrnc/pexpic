<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BaseAdminController extends Controller
{
    protected $adminGuard;

    public function __construct()
    {
        $this->middleware('XSS');
        $this->adminGuard = Auth::guard('admin');
    }

    protected function admin()
    {
        return $this->adminGuard;
    }
}
