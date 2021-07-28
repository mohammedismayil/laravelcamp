<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function index()
    {
      return view('imageUpload');
    }

    public function store(Request $request)
    {
    //   dd($request);
      $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
    
        $imageName = time().'.'.$request->image->extension();
     
        $request->image->move(public_path('images'), $imageName);
  
        // / store image in database from here /
    
        return redirect()->back()->with('success','Image uploaded successfully.')->with('image',$imageName);
    }

}
