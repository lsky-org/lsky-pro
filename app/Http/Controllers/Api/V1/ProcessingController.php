<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Services\ImageProcessing\ImageProcessingManager;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProcessingController extends Controller
{
    public function status(Request $request, ImageProcessingManager $manager): Response
    {
        return $this->success('success', $manager->status());
    }
}
