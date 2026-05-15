@extends('main')

@section('title','Program Studi')

@section('nama_tabel', 'Tabel Prodi')

@section('author', '2529250018 - Fernando Briliant')

@section('content')
    <table class="table table-bordered text-center">
        <tr>
            <th>No</th>
            <th>Nama Prodi</th>
            <th>Singkatan</th>
            <th>Kaprodi</th>
            <th>Fakultas</th>
            <th>Kode Fakultas</th>
        </tr>

        @foreach ($prodis as $key => $prodi)
            <tr>
                <th>{{$key + 1}}</th>
                <th>{{$prodi->namaProdi}}</th>
                <th>{{$prodi->singkatan}}</th>
                <th>{{$prodi->kaprodi}}</th>
                <th>{{$prodi->fakultas->namaFakultas}}</th>
                <th>{{$prodi->fakultas->singkatanFakultas}}</th>
            </tr>
        @endforeach
    </table>        
@endsection