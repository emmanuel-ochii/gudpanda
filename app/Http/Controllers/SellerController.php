<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index() {
        return inertia('Seller/Home', [
            'title' => 'Welcome - Seller Portal'
        ]);
    }
}
