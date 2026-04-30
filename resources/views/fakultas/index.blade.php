<h1>LIST FAKULTAS UNIVERSITAS MDP</h1>
<ol>
@foreach ($result as $item)
    <li>{{ $item->namaFakultas }} - {{ $item->singkatanFakultas }}</li>   
@endforeach
</ol>