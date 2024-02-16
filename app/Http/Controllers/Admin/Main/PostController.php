<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function __invoke()
    {
        return view('admin.post.index');
    }

}
