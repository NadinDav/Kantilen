<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;

use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\PostTag;
use App\Models\Category;

use App\Models\User;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __invoke()
    {
        return view('admin.layouts.main');
    }

    public function index(){
        return view('admin.main.index');
    }

}
