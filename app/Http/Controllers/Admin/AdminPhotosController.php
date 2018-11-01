<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Photo;
use Illuminate\Http\Request;

class AdminPhotosController extends Controller
{
    public function index()
    {
        $photos = Photo::paginate();

        return view('admin.photos.index', ['photos' => $photos]);
    }

    public function destroy(Photo $photo)
    {
        $photo->delete();

        $this->goodFlash('Photo removed.');

        return back();
    }
}
