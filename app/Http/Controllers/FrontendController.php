<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        return inertia('Frontend/Home', [
            'title' => 'Home - Gudpanda'
        ]);
    }

    public function shop() {
        return inertia('Frontend/Shop', [
            'title' => 'Shop - Gudpanda'
        ]);
    }

    public function becomeAGiver() {
        return inertia('Frontend/BecomeAGiver', [
            'title' => 'Become a Giver - Gudpanda'
        ]);
    }

    public function bid() {
        return inertia('Frontend/Bid', [
            'title' => 'Bid - Gudpanda'
        ]);
    }

    public function contact() {
        return inertia('Frontend/Contact', [
            'title' => 'Contact Us - Gudpanda'
        ]);
    }

    public function about() {
        return inertia('Frontend/About', [
            'title' => 'About Us - Gudpanda'
        ]);
    }

    public function faq() {
        return inertia('Frontend/Faqs', [
            'title' => 'FAQ - Gudpanda'
        ]);
    }

    public function whatWeDo() {
        return inertia('Frontend/WhatWeDo', [
            'title' => 'What We Do - Gudpanda'
        ]);
    }

    public function joinOurTeam() {
        return inertia('Frontend/JoinOurTeam', [
            'title' => 'Join Our Team - Gudpanda'
        ]);
    }
}
