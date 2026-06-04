@extends('main')

@section('title','Edit Fakultas')
@section('nama_tabel','Edit Fakultas')

@section('author', '2529250018 - Fernando Briliant')

@section('content')
    <form action="{{ route('fakultas.update', $fakultas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group mb-3">
                <label for="namaFakultas">Nama Fakultas</label>
                <input type="text" class="form-control" id="namaFakultas" name="namaFakultas" value="{{ old('namaFakultas') ?? $fakultas->namaFakultas }}">
            </div>
            <div class="form-group mb-5">
                <label for="singkatanFakultas">Singkatan Fakultas</label>
                <input type="text" class="form-control" id="singkatanFakultas" name="singkatanFakultas" value="{{ old('singkatanFakultas') ?? $fakultas->singkatanFakultas }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>

@endsection