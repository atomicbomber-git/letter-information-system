<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LetterController extends Controller
{
    public function index()
    {
        return view("letter.index");
    }

    public function create()
    {
        return view("letter.create");
    }
}
