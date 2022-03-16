<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ApiController extends Controller
{
    public function index(): View
    {
        return view('common.api');
    }
}
