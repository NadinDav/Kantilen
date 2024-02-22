<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\PostTag;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        User::firstOrCreate($data);
        return redirect()->route('admin.user.index');
    }

    public function show(User $user){
        return view('admin.user.show', compact('user'));

    }

    public function edit(User $user){
        return view('admin.user.edit', compact('user'));
    }
    public function update(UpdateRequest $request, User $user){
        $data = $request->validated();
        $user->update($data);
        return view('admin.user.show', compact('user'));
    }

    public function destroy(User $user){
        $user ->delete();
        return redirect()->route('admin.user.index');
    }

}
