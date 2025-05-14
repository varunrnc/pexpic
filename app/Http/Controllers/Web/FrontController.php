<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function productDetails()
    {
        return view('web.product-details');
    }
}
