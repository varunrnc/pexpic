<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Admin\BaseAdminController;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class AdminBlogCategoryController extends BaseAdminController
{
    public function index()
    {
        $categories = BlogCategory::all();
        return $this->admin()->check()
            ? view('admin.blog.category.blog-category', compact('categories'))
            : redirect()->route('admin.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'blog_category_image' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);

        $category = new BlogCategory();
        $category->category = $request->title;

        if ($request->hasFile('blog_category_image')) {
            $image = $request->file('blog_category_image');
            $filename = $request->title . '_' . time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('uploads/blog/categories');

            $image->move($destinationPath, $filename);
            $category->category_image = $filename;
            $category->save();
        }


        return redirect()->back()->with('success', 'Category Added Successfully!');
    }

    public function status(Request $request, $id)
    {
        $category = BlogCategory::findOrFail($id);
        $category->status = $request->status;
        $category->save();

        return response()->json(['message' => 'Status updated successfully']);
    }

    public function destroy($id)
    {
        $category = BlogCategory::find($id);

        if (!$category) {
            return response()->json(['success' => false, 'message' => 'Category not found.'], 404);
        }

        // Optionally delete image file too
        $imagePath = public_path('uploads/blog/categories/' . $category->category_image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $category->delete();

        return response()->json(['success' => true, 'message' => 'Category deleted successfully.']);
    }
}
