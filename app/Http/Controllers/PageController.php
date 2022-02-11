<?php

namespace App\Http\Controllers;

use Corcel\Model\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($slug)
    {
        return view('page.show', [
            'page' => Page::slug($slug)->status('publish')->firstOrFail()
        ]);
    }
}
