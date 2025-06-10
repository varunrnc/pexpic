<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Admin\BaseAdminController;
use App\Models\Slider;
use Illuminate\Http\Request;

class AdminSliderController extends BaseAdminController
{
    public function index()
    {
        $sliders = Slider::all();
        return $this->admin()->check()
            ? view('admin.slider.index', compact('sliders'))
            : redirect()->route('admin.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slider_image' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);

        $slider = new Slider();
        $slider->title = $request->title;

        if ($request->hasFile('slider_image')) {
            $image = $request->file('slider_image');
            $filename = $request->title . '_' . time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('uploads/sliders');

            $image->move($destinationPath, $filename);
            $slider->slider_image = $filename;
            $slider->save();
        }


        return redirect()->back()->with('success', 'Slider Added Successfully!');
    }

    public function status(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);
        $slider->status = $request->status;
        $slider->save();

        return response()->json(['message' => 'Status updated successfully']);
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);

        if (!$slider) {
            return response()->json(['success' => false, 'message' => 'Slider not found.'], 404);
        }

        // Optionally delete image file too
        $imagePath = public_path('uploads/sliders/' . $slider->slider_image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $slider->delete();

        return response()->json(['success' => true, 'message' => 'Slider deleted successfully.']);
    }
}
