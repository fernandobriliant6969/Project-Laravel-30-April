@extends('main')

@section('title', 'Mahasiswa')

@section('nama_tabel', 'Tabel Mahasiswa')

@section('author', '2529250018 - Fernando Briliant')

@section('content')
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-2">Tambah Mahasiswa</a>
    <table class="table table-bordered text-center">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Foto</th>
            <th>Program Studi</th>
            <th>Aksi</th>
        </tr>

        @foreach ($mahasiswa as $key => $mhs)
            <tr>
                <th>{{$key + 1}}</th>
                <th>{{$mhs->nama}}</th>
                <th>{{$mhs->npm}}</th>
                <th>
                    @if($mhs->foto)
                        <img src="{{ asset('storage/foto/' . $mhs->foto) }}" alt="Foto" width="100px">
                    @else
                        <p>Foto tidak tersedia</p>
                    @endif
                </th>
                <th>{{$mhs->prodi->namaProdi ?? '-'}}</th>
                <th>
                    <a href="{{ route('mahasiswa.edit', $mhs->id)}}" class="btn btn-info">Edit</a>
                    <form method="POST" action="{{ route('mahasiswa.destroy', $mhs->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm" data-toggle="tooltip" title='Delete' data-nama='{{ $mhs->nama }}'>
                            <i class="bi bi-trash-fill"></i>
                            Hapus
                        </button>
                    </form>
                </th>
            </tr>
        @endforeach
    </table> 
@endsection