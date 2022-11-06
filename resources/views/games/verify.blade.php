@extends('layout.index')
@section('konten')
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Description</th>
                <th>Homepages</th>
                <th>Cover</th>
                <th>Asset</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
            <tr>
                <td>{{ $d->name }}</td>
                <td>{{ $d->description }}</td>
                <td>{{ $d->homepage }}</td>
                <td>
                    <img src="{{ asset('img/'.$d->cover) }}" width="400" height="400">
                </td>
                <td>
                    <a href="{{ url('pub/detail/'.$d->id) }}" class="btn-sm btn-primary">Asset</a>
                </td>
                <td>
                    <a href="{{ url('pub/verify/'.$d->id) }}"class="btn-sm btn-primary">Verify</a>
                </td>
            </tr>
            @endforeach
            
        </tbody>

    </table>
@endsection