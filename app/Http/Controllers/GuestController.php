<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index() {
        return inertia('Guest/Home', [
            'title' => 'Home - Gudpanda'
        ]);
    }

    public function shop() {
        return inertia('Guest/Shop', [
            'title' => 'Shop - Gudpanda'
        ]);
    }

    public function becomeAGiver() {
        return inertia('Guest/BecomeAGiver', [
            'title' => 'Become a Giver - Gudpanda'
        ]);
    }

    public function bid() {
        return inertia('Guest/Bid', [
            'title' => 'Bid - Gudpanda'
        ]);
    }

    public function contact() {
        return inertia('Guest/Contact', [
            'title' => 'Contact Us - Gudpanda'
        ]);
    }

    public function about() {
        return inertia('Guest/About', [
            'title' => 'About Us - Gudpanda'
        ]);
    }

    public function faq() {
        return inertia('Guest/Faqs', [
            'title' => 'FAQ - Gudpanda'
        ]);
    }

    public function whatWeDo() {
        return inertia('Guest/WhatWeDo', [
            'title' => 'What We Do - Gudpanda'
        ]);
    }

    public function joinOurTeam() {
        return inertia('Guest/JoinOurTeam', [
            'title' => 'Join Our Team - Gudpanda'
        ]);
    }
}
