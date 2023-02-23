<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $photo = Image::find(1);
        return view('viewImage', compact('photo'));
    }

    public function create()
    {
        return view('image_upload');
    }

    public function store(Request $request)
    {
        // dd($request->file('image')->getClientOriginalName());

        $formData = $request->validate([
            'image' => 'required|mimes:jpg, png, jpeg'
        ]);

        $newImage = time() . '-' . $request->image->getClientOriginalName();

        $request->image->move(public_path('images'), $newImage);
        // dd($newImage);

        $formData['image'] = $newImage;

        Image::create($formData);


    }
}
