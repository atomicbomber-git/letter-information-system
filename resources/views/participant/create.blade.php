@extends("layouts.admin")

@section("title", "Tambah Peserta Dinas")

@section("content")
    @include("layouts.navbar")
    
    <div style="height: 20px"></div>
    
    <div class="container">
        
        <div style="height: 30px"></div>

        <h2> Kelola Peserta Dinas Surat "{{ $letter->nomor }}" </h2>

        <div style="height: 30px"></div>

        <div class="card" style="max-width: 500px; margin-bottom: 20px">
            <div class="card-header">
                Tambah Peserta Dinas untuk Surat "{{ $letter->nomor }}"
            </div>
            <div class="card-body">
                @if(session("message-success"))
                    <div class="alert alert-success"> {{ session("message-success") }} </div>
                @endif

                <form method="POST" action="{{ route("participant.store", $letter) }}">
                    <div class="form-group">
                        <label for=""> Nama: </label>
                        <input name="nip" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""> NIP: </label>
                        <input name="nama" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""> Golongan: </label>
                        <input name="golongan" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for=""> Jabatan: </label>
                        <input name="jabatan" type="text" class="form-control">
                    </div>

                    <div class="form-group text-right">
                        <button class="btn btn-primary"> Tambahkan </button>
                    </div>

                    {{ csrf_field() }}
                </form>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <i class="fa fa-users"> Seluruh Peserta Dinas </i>
            </div>

            <div class="card-body">
                <div class="container">
                    @if(session("message-success-delete"))
                        <div class="alert alert-success"> {{ session("message-success-delete") }} </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th> Nama </th>
                                <th> NIP </th>
                                <th> Golongan </th>
                                <th> Jabatan </th>
                                <th> Kelola </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($participants as $participant)
                            <tr>
                                <td> {{ $participant->nama }} </td>
                                <td> {{ $participant->nip }} </td>
                                <td> {{ $participant->golongan }} </td>
                                <td> {{ $participant->jabatan }} </td>
                                <td>
                                    <a href="{{ route("participant.delete", $participant) }}" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection