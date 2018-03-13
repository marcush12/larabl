<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotosController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $photos = Photo::latest()->get();
        return view('media.index', compact('photos'));
    }

    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);
        unlink(public_path('/images/') . $photo->photo);
        $photo->delete();
        return redirect('media');
    }

}
