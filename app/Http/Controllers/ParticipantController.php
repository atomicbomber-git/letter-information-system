<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Letter;
use App\Participant;

class ParticipantController extends Controller
{
    public function create(Letter $letter)
    {
        return view("participant.create", [
            "letter" => $letter,
            "participants" => $letter->participants
        ]);
    }

    public function store(Letter $letter)
    {
        $letter->participants()->create(
            request()->all()
        );

        return redirect()->back()
            ->with("message-success", "Peserta Dinas Berhasil Ditambahkan.");
    }

    public function delete(Participant $participant)
    {
        $participant->delete();
        return redirect()->back()
            ->with("message-success-delete", "Peserta Dinas Berhasil Dihapus.");
    }
}
