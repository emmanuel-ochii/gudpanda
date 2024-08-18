<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return inertia('Frontend/Home', [
            'title' => 'index pros',
        ]);
    }

    public function shop()
    {
        return inertia('Frontend/Shop', [
            'title' => 'index pros',
        ]);
    }

    public function becomeAGiver()
    {
        return inertia('Frontend/BecomeAGiver', [
            'title' => 'index pros',
        ]);
    }

    public function bid()
    {
        return inertia('Frontend/Bid', [
            'title' => 'index pros',
        ]);
    }

    public function contact()
    {
        return inertia('Frontend/Contact', [
            'title' => 'index pros',
        ]);
    }

    public function about()
    {
        return inertia('Frontend/About', [
            'title' => 'index pros',
        ]);
    }

    public function faq()
    {
        return inertia('Frontend/Faq', [
            'title' => 'index pros',
        ]);
    }
}
