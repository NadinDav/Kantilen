<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Award;

class AwardController extends Controller
{
    public function __invoke()
    {
        $awards = Award::all();
        return view('award.index', compact('awards'));
    }

}
