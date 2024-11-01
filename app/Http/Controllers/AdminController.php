<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return inertia('Admin/Home', [
            'title' => 'Welcome - Admin Portal'
        ]);
    }

    public function allItems() {
        return inertia('Admin/AllItems', [
            'title' => 'All Items - Admin Portal'
        ]);
    }

    public function usedItems() {
        return inertia('Admin/UsedItems', [
            'title' => 'Used Items - Admin Portal'
        ]);
    }
}
