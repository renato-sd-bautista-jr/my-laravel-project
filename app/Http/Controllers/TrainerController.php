<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index()
    {
        return view('trainers'); // views/home.blade.php
    }
}
