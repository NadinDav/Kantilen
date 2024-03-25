<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\Image;
use App\Models\Post;

use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\PostTag;
use App\Models\Category;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['userCount'] = User::all()->count();
        $data['postsCount'] = Post::all()->count();
        $data['tagsCount'] = Tag::all()->count();
        $data['categoriesCount'] = Category::all()->count();
        $data['imagesCount'] = Image::all()->count();
        $data['awardsCount'] = Award::all()->count();
        return view('admin.main.index', compact('data'));
    }

}
