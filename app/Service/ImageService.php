<?php

namespace App\Service;

use App\Models\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $data['image'] = Storage::disk('public')->put('/img', $data['image']);
            $image = Image::firstOrCreate($data);
            DB::commit();
        } catch (\Exception) {
            DB::rollBack();
            abort(500);
        }
    }

    public function update($data, $image)
    {
        try {
            DB::beginTransaction();
            if (isset($data['image'])) {
                $data['image'] = Storage::disk('public')->put('/img', $data['image']);
            };
            $image->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $image;
    }


}
