<?php

namespace App\Http\Controllers\Admin\Award;

use App\Http\Controllers\Controller;
use App\Service\AwardService;

class BasedController extends Controller
{
    public $service;
    public function __construct(AwardService $service)
    {
        $this->service = $service;
    }
}
