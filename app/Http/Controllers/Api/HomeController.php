<?php

namespace App\Http\Controllers\Api;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function __invoke()
    {
        return Home::all()->first();
    }

}
