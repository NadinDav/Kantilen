<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Image;

class PostController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(9);
        return view('post.index', compact('posts'));
    }


    public function single(Post $post){

        return view('post.single', compact('post'));
    }
//    public function index()
//    {
//        $images = Image::all();
//        return view('image.index', compact('images'));
//    }
}
