<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('image');
    }

    public function imageUpload(Request $request): RedirectResponse
    {
        $request->validate([
            'image.*' => 'required|image|mimes:jpg,jpeg,gif,svg,png|max:5120',
        ]);

        // $imageName = time().'.'.$request->image->getClientOriginalName(); // now() is not working...
        // $request->image->move(public_path('images'), $imageName);
        // return redirect()->back()->withSuccess('image successfully uploaded')
        // ->with('image', $imageName);
        //dd($request->all());

        //****Multiple image */
        foreach ($request->image as $value) {
            $imageName = time() . '.' . $value->getClientOriginalName();
            $value->move(public_path('images'), $imageName);
            $imageNames[] = $imageName;
        }

        return redirect()->back()->withSuccess('image successfully uploaded')
            ->with('image', $imageNames);


    }
}