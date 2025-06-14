<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->with('category')->get();
        // return $products;
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image_type' => 'required',
            'license_type' => 'required',
            'image_size' => 'required',
            'price' => 'required',
            'product' => 'required',
            'thumbnail' => 'required|max:5120'
        ]);

        $product = new Product();
        $product->title = $request->title;
        $product->desc = $request->desc;
        $product->category_id = $request->category;
        $product->image_type = $request->image_type;
        $product->license_type = $request->license_type;
        $product->image_size = $request->image_size;
        $product->price = $request->price;
        

        if ($request->hasFile('product')) {
            $image = $request->file('product');
            $extension = $image->getClientOriginalExtension();
            $productName = Str::slug($request->title) . "-" . time() . "." . $extension;
            $image->move(public_path('uploads/products'), $productName);
        }
        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $extension = $image->getClientOriginalExtension();
            $picName = Str::slug($request->title) . "-th-" . time() . "." . $extension;
            $image->move(public_path('uploads/thumbnails'), $picName);
        }
        $product->product = $productName;
        $product->thumbnail = $picName;

        $product->save();
        return redirect()->route('admin.product.index');
    }

    public function status(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->status = $request->status;
        $product->save();

        return response()->json(['message' => 'Status updated successfully']);
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Product not found.'], 404);
        }

        // Optionally delete image file too
        $productImagePath = public_path('uploads/products/' . $product->product);
        if (file_exists($productImagePath)) {
            unlink($productImagePath);
        }
        $thumbnail = public_path('uploads/thumbnails/' . $product->thumbnail);
        if (file_exists($thumbnail)) {
            unlink($thumbnail);
        }

        $product->delete();

        return response()->json(['success' => true, 'message' => 'Product deleted successfully.']);
    }
}
