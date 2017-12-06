@extends("layouts.admin")

@section("title", "Kelola Surat")

@section("content")
    @include("layouts.navbar")

    </nav>
    
    <div style="height: 20px"></div>

    <div class="container">
        @if(session("message-success"))
            <div class="alert alert-success"> {{ session("message-success") }} </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th> Nomor Surat </th>
                    <th> Pejabat Berwenang Pemberi Tugas </th>
                    <th> Tujuan Penugasan </th>
                    <th> Kelola </th>
                </tr>

                @foreach ($letters as $letter)
                <tr>
                    <td> {{ $letter->nomor }} </td>
                    <td> {{ $letter->pejabat_berwenang_pemberi_tugas }} </td>
                    <td> {{ $letter->tujuan }} </td>
                    <td>
                        <a href="" class="btn btn-dark btn-sm">
                            <i class="fa fa-print"></i>
                        </a>
                        <a href="" class="btn btn-dark btn-sm">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a href="{{ route("participant.create", $letter) }}" class="btn btn-dark btn-sm">
                            <i class="fa fa-plus"></i>
                            Tambah Peserta
                        </a>
                        <a href="{{ route("letter.delete", $letter) }}" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            
            </thead>

            <tbody></tbody>
        </table>
    </div>
@endsection