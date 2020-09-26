<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Homepage
     *
     * @return [type] [description]
     */
    public function welcome()
    {
        return view('welcome');
    }

    /**
     * Baker Gallery
     *
     * @return [type] [description]
     */
    public function gallery()
    {
        $photos = Photo::active()
                       ->orderBy('created_at', 'DESC')
                       ->paginate(20);
        return view('gallery', compact('photos'));
    }

    /**
     * Baby Shower
     * @return [type] [description]
     */
    public function shower()
    {
        return view('shower');
    }
}
