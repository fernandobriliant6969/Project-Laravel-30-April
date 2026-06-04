@extends('main')

@section('title','Tambah Prodi')
@section('nama_tabel','Tambah Prodi')

@section('author', '2529250018 - Fernando Briliant')

@section('content')
    <form action="{{ route('prodi.store') }}" method="POST">
        <div class="card-body">
            <div class="form-group mb-3">
                <label for="namaProdi">Nama Prodi</label>
                <input type="text" class="form-control" name="namaProdi">
                @if($errors->get('namaProdi'))
                    <div class="text text-danger">
                        Nama Prodi nya di Isi ya 🥰🙏
                    </div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="singkatan">Singkatan Prodi</label>
                <input type="text" class="form-control" name="singkatan">
                @if($errors->get('singkatan'))
                    <div class="text text-danger">
                        Singkatan nya di Isi ya 🥰🙏
                    </div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="kaprodi">Nama Kaprodi</label>
                <input type="text" class="form-control" name="kaprodi">
                @if($errors->get('kaprodi'))
                    <div class="text text-danger">
                        Nama Kaprodi nya di Isi ya 🥰🙏
                    </div>
                @endif
            </div>
            <div class="form-group mb-5">
                <label for="Fakultas_id">Fakultas</label>
                <select name="Fakultas_id" class="form-control">
                    @foreach($fakultas as $f)
                        <option value="{{ $f->id }}" {{ old('fakultas') == $f->id ? 'selected' : '' }}>
                            {{ $f->namaFakultas }}
                        </option>
                    @endforeach
                </select>
                @if($errors->get('namaProdi'))
                    <div class="text text-danger">
                        Fakultas nya di Isi ya 🥰🙏
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>

@endsection