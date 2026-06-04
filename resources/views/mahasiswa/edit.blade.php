@extends('main')

@section('title','Tambah Mahasiswa')
@section('nama_tabel','Tambah Mahasiswa')

@section('author', '2529250018 - Fernando Briliant')

@section('content')
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="card-body">
            <div class="form-group mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') ?? $mahasiswa->nama }}">
            </div>
            <div class="form-group mb-3">
                <label for="singkatanFakultas">NPM</label>
                <input type="text" class="form-control" id="npm" name="npm" value="{{ old('npm') ?? $mahasiswa->npm }}">
            </div>
            <div class="form-group mb-3">
                <label for="singkatanFakultas">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>
            <div class="form-group mb-3">
                <label for="programStudi">Program Studi</label>
                <select id="ProgramStudi" name="idProdi" class="form-control">
                    @foreach($prodi as $prodi)
                        <option value="{{ $prodi->id }}" {{ $mahasiswa->idProdi == $prodi->id ? 'selected' : ''}}>{{ $prodi->namaProdi }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>

@endsection