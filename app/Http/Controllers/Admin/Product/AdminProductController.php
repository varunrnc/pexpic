<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'title' => 'required',
            'image_type' => 'required',
            'license_type' => 'required',
            'image_size' => 'required',
            'price' => 'required',
        ]);

        $product = new Product();
        $product->title = $request->title;
        $product->desc = $request->desc;
        $product->category_id = $request->category;
        $product->image_type = $request->image_type;
        $product->title = $request->title;
        $product->title = $request->title;
        $product->title = $request->title;
        $product->title = $request->title;
        $product->title = $request->title;
        $product->title = $request->title;
        $product->title = $request->title;
        $product->title = $request->title;
        $product->title = $request->title;
        $product->title = $request->title;
        $product->title = $request->title;
    }
}
