<?php

namespace App\Http\Controllers\Admin\Award;

use App\Http\Controllers\Admin\Award\BasedController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Award\StoreRequest;
use App\Http\Requests\Admin\Award\UpdateRequest;
use App\Models\Award;
use Illuminate\Support\Facades\Storage;

class PostController extends BasedController
{
    public function __invoke()
    {
        $awards = Award::all();
        return view('admin.award.index', compact('awards'));
    }

    public function create()
    {
        return view('admin.award.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        Award::firstOrCreate($data);
        return redirect()->route('admin.award.index');
    }

    public function show(Award $award){
        return view('admin.award.show', compact('award'));

    }

    public function edit(Award $award){
        return view('admin.award.edit', compact('award'));
    }
    public function update(UpdateRequest $request, Award $award){
        $data = $request->validated();
        $award = $this->service->update($data, $award);
        return view('admin.award.show', compact('award'));
    }

    public function destroy(Award $award){
        $award ->delete();
        return redirect()->route('admin.award.index');
    }

}
