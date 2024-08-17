<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return inertia('Index/Index', [
            'title' => 'index pros',
        ]);
    }

    public function show()
    {
        return inertia('Index/Show', [
            'title' => 'show props',
        ]);
    }
}
