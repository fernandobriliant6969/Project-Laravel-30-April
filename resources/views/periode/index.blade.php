@extends('main')

@section('title','Periode')

@section('nama_tabel', 'Tabel Periode')

@section('author', '2529250018 - Fernando Briliant')

@section('content')
    <table class="table table-bordered text-center">
        <tr>
            <th>No</th>
            <th>Tahun Akademik</th>
            <th>Semester</th>
        </tr>

        @foreach ($result as $key => $periode)
            <tr>
                <th>{{$key + 1}}</th>
                <th>{{$periode->tahunAkademik}}</th>
                <th>{{$periode->semester}}</th>
            </tr>
        @endforeach
    </table>        
@endsection