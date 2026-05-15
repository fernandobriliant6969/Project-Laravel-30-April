@extends('main')

@section('title','Tambah Preiode')
@section('nama_tabel','Tambah Periode')

@section('author', '2529250018 - Fernando Briliant')

@section('content')
    <form action="{{ route('periode.store') }}" method="POST">
        <div class="card-body">
            <div class="form-group mb-3">
                <label for="tahunAkademik">Tahun Akademik</label>
                <input type="text" class="form-control" id="tahunAkademik" name="tahunAkademik">
            </div>
            <div class="form-group mb-5">
                <label for="semester">Semester</label>
                <input type="text" class="form-control" id="semester" name="semester">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>

@endsection