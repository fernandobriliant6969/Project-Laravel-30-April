<h1>Data Pribadi</h1>
<table border="1" cellpading="10">
    <tr>
        <th>No</th>
        <th>Nama Prodi</th>
        <th>Singkatan</th>
        <th>Kaprodi</th>
        <th>Fakultas</th>
    </tr>

    @foreach ($prodis as $key => $prodi)
        <tr>
            <th>{{$key + 1}}</th>
            <th>{{$prodi->namaProdi}}</th>
            <th>{{$prodi->singkatan}}</th>
            <th>{{$prodi->kaprodi}}</th>
            <th>{{$prodi->fakultas->namaFakultas}}</th>
        </tr>
    @endforeach
</table>