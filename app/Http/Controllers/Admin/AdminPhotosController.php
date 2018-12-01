<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Photo;
use Illuminate\Http\Request;

class AdminPhotosController extends Controller
{
    public function index()
    {
        $photos = Photo::orderBy('created_at', 'DESC')->paginate();

        return view('admin.photos.index', ['photos' => $photos]);
    }

    /**
     * Toggle the photo on and off
     * @param  Photo  $photo [description]
     * @return [type]        [description]
     */
    public function toggle(Photo $photo)
    {
        $photo->toggleActive();

        $message = 'Photo is now ' . $photo->isActive() ? 'Active ' : 'Inactive';

        $this->goodFlash($message);

        return back();
    }

    /**
     * Destroy the photo
     * @param  Photo  $photo [description]
     * @return [type]        [description]
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();

        $this->goodFlash('Photo removed.');

        return back();
    }
}
