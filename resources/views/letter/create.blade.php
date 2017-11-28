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
                <form method="POST" action="{{ route("letter.store") }}">
                    <div class="form-group">
                        <label for=""> Nomor Surat: </label>
                        <input name="nomor" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""> Pegawai Ditugaskan: </label>
                        <input name="pegawai_ditugaskan" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""> Tujuan Penugasan: </label>
                        <input name="tujuan" type="text" class="form-control">
                    </div>

                    <div class="form-group text-right">
                        <button class="btn btn-primary"> Tambahkan </button>
                    </div>

                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
@endsection