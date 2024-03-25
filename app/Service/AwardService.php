<?php

namespace App\Service;

use App\Models\Award;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AwardService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $data['award'] = Storage::disk('public')->put('/img', $data['award']);
            $award = Award::firstOrCreate($data);
            DB::commit();
        } catch (\Exception) {
            DB::rollBack();
            abort(500);
        }
    }

    public function update($data, $award)
    {
        try {
            DB::beginTransaction();
            if (isset($data['award'])) {
                $data['award'] = Storage::disk('public')->put('/img', $data['award']);
            };
            $award->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $award;
    }


}
