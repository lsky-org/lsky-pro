<?php

namespace App\Http\Controllers\Common;

use App\Enums\ConfigKey;
use App\Http\Controllers\Controller;
use App\Utils;
use Illuminate\View\View;

class ApiController extends Controller
{
    public function __construct()
    {
        if (! Utils::config(ConfigKey::IsEnableApi)) {
            abort(404);
        }
    }

    public function index(): View
    {
        return view('common.api');
    }
}
