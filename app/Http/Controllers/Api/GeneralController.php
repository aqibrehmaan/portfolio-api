<?php

namespace App\Http\Controllers\Api;

use App\Models\General;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GeneralController extends Controller
{
    public function __invoke()
    {
        return General::all()->first();
    }
}
