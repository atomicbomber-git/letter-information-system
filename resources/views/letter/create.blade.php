@extends("layouts.admin")

@section("title", "Kelola Surat")

@section("content")
    @include("layouts.navbar")
    
    <div style="height: 20px"></div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                Buat Surat Baru
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for=""> Nomor Surat: </label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for=""> Pegawai Ditugaskan: </label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for=""> Tujuan Penugasan: </label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group text-right">
                    <div class="btn btn-primary"> Tambahkan </div>
                </div>
            </div>
        </div>
    </div>
@endsection