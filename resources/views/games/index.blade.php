@extends('layout.index')
@section('konten')
    <a href="{{ url('games/tambah') }}" class="btn btn-primary">Tambah</a>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Description</th>
                <th>Homepages</th>
                <th>Cover</th>
                <th>Asset</th>
                <th>Aksi</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($game as $g)
            <tr>
                <td>{{ $g->name }}</td>
                <td>{{ $g->description }}</td>
                <td>{{ $g->homepage }}</td>
                <td>
                    <img src="{{ asset('img/'.$g->cover) }}" width="400" height="400">
                </td>
                <td>
                    <a href="{{ url('gameasset/'.$g->id) }}" class="btn-sm btn-primary">Detail</a>
                </td>
                <td>
                    <div class="row">
                        <a href="{{ url('games/edit/'.$g->id) }}" class="btn-sm btn-secondary">Edit</a>
                        <a href="{{ url('games/delete/'.$g->id) }}" class="btn-sm btn-danger" onclick="return confirm('Anda Yakin?')">Delete</a>
                    </div>
                </td>
                <td>
                    <span class="badge badge-secondary">{{ $g->status }}</span>
                </td>
            </tr>
            @endforeach
           
        </tbody>

    </table>
@endsection