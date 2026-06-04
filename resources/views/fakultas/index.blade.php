@extends('main')

@section('title', 'Fakultas')

@section('nama_tabel', 'Tabel Fakultas')

@section('author', '2529250018 - Fernando Briliant')

@section('content')
    <a href="{{ route('fakultas.create') }}" class="btn btn-primary mb-2">Tambah Fakultas</a>
    <table class="table table-bordered text-center">
        <tr>
            <th>No</th>
            <th>Nama Fakultas</th>
            <th>Kode Fakultas</th>
            <th>Aksi</th>
        </tr>

        @foreach ($result as $key => $item)
            <tr>
                <th>{{$key + 1}}</th>
                <th>{{$item->namaFakultas}}</th>
                <th>{{$item->singkatanFakultas}}</th>
                <th>
                    <a href="{{ route('fakultas.edit', $item->id)}}" class="btn btn-info">Edit</a>
                    <form method="POST" action="{{ route('fakultas.destroy', $item->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm" data-toggle="tooltip" title='Delete' data-nama='{{ $item->namaFakultas }}'>
                            <i class="bi bi-trash-fill"></i>
                            Hapus
                        </button>
                    </form>
                </th>
            </tr>
        @endforeach
    </table> 
@endsection