<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        return view('pricing'); // views/home.blade.php
    }
}
