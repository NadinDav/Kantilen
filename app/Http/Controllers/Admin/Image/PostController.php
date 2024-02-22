<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Admin\Image\BasedController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Image\StoreRequest;
use App\Http\Requests\Admin\Image\UpdateRequest;
use App\Models\Image;
use App\Models\PostTag;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class PostController extends BasedController
{
    public function __invoke()
    {
        $images = Image::all();
        return view('admin.image.index', compact('images'));
    }

    public function create()
    {
        return view('admin.image.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        Image::firstOrCreate($data);
        return redirect()->route('admin.image.index');
    }

    public function show(Image $image){
        return view('admin.image.show', compact('image'));

    }

    public function edit(Image $image){
        return view('admin.image.edit', compact('image'));
    }
    public function update(UpdateRequest $request, Image $image){
        $data = $request->validated();
        $image = $this->service->update($data, $image);
        return view('admin.image.show', compact('image'));
    }

    public function destroy(Image $image){
        $image ->delete();
        return redirect()->route('admin.image.index');
    }

}
