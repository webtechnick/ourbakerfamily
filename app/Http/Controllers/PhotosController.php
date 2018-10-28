<?php

namespace App\Http\Controllers;

use App\Http\Requests\DropzoneRequest;
use App\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    /**
     * Store the photo
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(DropzoneRequest $request)
    {
        $photo = Photo::fromUploadedFile($request->file('photo'), $request->all());
        $photo->save();

        if ($request->wantsJson()) {
            return $photo;
        }

        $this->goodFlash('Thanks for submitting photos!');

        return redirect()->route('home');
    }
}
