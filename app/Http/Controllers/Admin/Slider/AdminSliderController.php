<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Admin\BaseAdminController;
use Illuminate\Http\Request;

class AdminSliderController extends BaseAdminController
{
    public function index()
    {
        return $this->admin()->check()
        ? view('admin.slider.index')
        : redirect()->route('admin.login');
    }

    
}
