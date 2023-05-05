<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return inertia('Index/Index');
    }

    public function show()
    {
        return inertia('Index/show');
    }
}
