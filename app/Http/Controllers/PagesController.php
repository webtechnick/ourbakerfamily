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
        $photos = Photo::active()
                       ->orderBy('created_at', 'DESC')
                       ->paginate(20);
        return view('welcome', compact('photos'));
    }
}
