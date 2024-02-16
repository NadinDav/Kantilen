<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function __invoke()
    {
        return view('admin.categories.index');
    }

}
