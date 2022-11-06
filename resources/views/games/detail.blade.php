@extends('layout.index')
@section('konten')
<table class="table table-stripped mt-3">
    <thead>
        <tr>
            <th>Gambar</th>
            
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
            <td>
                <img src="{{ asset('img/'.$d->path) }}" width="400" height="400">
            </td>
            <td>
                <a href="{{ url('pub/berandapub') }}" class="btn-sm btn-secondary">Kenbali</a>
            </td>
        @endforeach
        
    </tbody>

</table>
@endsection