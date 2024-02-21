<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\PostTag;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Service\PostService;
use Illuminate\Support\Facades\Storage;

class BaseController extends Controller
{
    public $service;
    public function __construct(PostService $service)
    {
        $this->service = $service;
    }
}
