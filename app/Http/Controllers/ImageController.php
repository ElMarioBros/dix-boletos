<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageRequest;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::first();
        return view('admin.images', compact('images'));    
    }

    public function store(StoreImageRequest $request)
    {
        $images = Image::first();

        if ($request->hasFile('image_one')) {
            $images->image_one = $request->file('image_one')->store('images', 'public');
        }
    
        if ($request->hasFile('image_two')) {
            $images->image_two = $request->file('image_two')->store('images', 'public');
        }
    
        $images->save();
    
        return redirect()->route('admin.image')->with('success', 'Imagen registrada con éxito');
    }
}
