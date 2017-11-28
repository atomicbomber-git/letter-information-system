<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Letter;

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

    public function store()
    {
        Letter::create(request()->all());

        return redirect()->back();
    }
}
