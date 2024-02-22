<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;
use App\Service\ImageService;

class BasedController extends Controller
{
    public $service;
    public function __construct(ImageService $service)
    {
        $this->service = $service;
    }
}
