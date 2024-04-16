<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class WorldController extends Controller
{
    public function index()
    {
        return view('world');
    }
}