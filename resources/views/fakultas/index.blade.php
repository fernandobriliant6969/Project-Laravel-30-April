@extends('main')

@section('title', 'Fakultas')

@section('nama_tabel', 'Tabel Fakultas')

@section('author', '2529250018 - Fernando Briliant')

@section('content')
    <table class="table table-bordered text-center">
        <tr>
            <th>No</th>
            <th>Nama Fakultas</th>
            <th>Kode Fakultas</th>
        </tr>

        @foreach ($result as $key => $item)
            <tr>
                <th>{{$key + 1}}</th>
                <th>{{$item->namaFakultas}}</th>
                <th>{{$item->singkatanFakultas}}</th>

            </tr>
        @endforeach
    </table> 
@endsection