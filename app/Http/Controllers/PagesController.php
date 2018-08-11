<?php

namespace App\Http\Controllers;

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
}
