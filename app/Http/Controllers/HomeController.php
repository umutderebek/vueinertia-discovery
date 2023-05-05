<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return inertia('Index/Index',
        [
            'name' => 'John Doe',
            'age' => 25,
            'hobbies' => ['Reading', 'Walking', 'Coding']
        ]);
    }

    public function show()
    {
        return inertia('Index/show');
    }
}
