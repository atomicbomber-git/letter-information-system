<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Letter;

class LetterController extends Controller
{
    public function index()
    {
        return view("letter.index", ["letters" => Letter::all()]);
    }

    public function create()
    {
        return view("letter.create");
    }

    public function store()
    {
        Letter::create(request()->all());

        return redirect()->back()
            ->with("message-success", "Surat telah berhasil ditambahkan.");
    }

    public function delete(Letter $letter)
    {
        $letter->delete();
        return redirect()->back()
            ->with("message-success", "Surat telah berhasil dihapus.");
    }
}
