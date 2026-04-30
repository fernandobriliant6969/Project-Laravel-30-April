<h1>LIST PERIODE UNIVERSITAS MDP</h1>
<ol>
@foreach ($result as $item)
    <li> Tahun Akademik {{ $item->tahunAkademik }} - Semester {{ $item->semester }}</li>   
@endforeach
</ol>