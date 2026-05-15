@extends('main')

@section('title','Tambah Fakultas')
@section('nama_tabel','Tambah Fakultas')

@section('author', '2529250018 - Fernando Briliant')

@section('content')
    <form action="{{ route('fakultas.store') }}" method="POST">
        <div class="card-body">
            <div class="form-group mb-3">
                <label for="namaFakultas">Nama Fakultas</label>
                <input type="text" class="form-control" id="namaFakultas" name="namaFakultas">
            </div>
            <div class="form-group mb-5">
                <label for="singkatanFakultas">Singkatan Fakultas</label>
                <input type="text" class="form-control" id="singkatanFakultas" name="singkatanFakultas">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>

@endsection