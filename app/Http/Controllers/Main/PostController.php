<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function __invoke()
    {
        return view('post.index');
    }

}
