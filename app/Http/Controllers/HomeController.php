<?php

namespace App\Http\Controllers;

use Corcel\Model\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        return view('welcome', [
            'posts' => Post::all()
        ]);
    }
}
