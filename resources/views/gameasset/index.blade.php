@extends('layout.index')
@section('konten')
<div class="float-left">
    <a href="{{ url('games/berandadev') }}" class="btn btn-secondary">Kembali</a>
</div>
    <form action="{{ url('/gameasset/store/'.$id) }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <input type="file" class="form-control" name="path">
                <input type="submit" value="submit" name="submit" class="btn btn-primary">
              </div>
            
    </form>
    <hr>
    <table class="table table-stripped mt-3">
        <thead>
            <tr>
                <th>Gambar</th>
                
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gameasset as $ga)
            <tr>
                <td>
                    <img src="{{ asset('img/'.$ga->path) }}" width="400" height="400"></td>
                <td>
                    <form action="{{ url('gameasset/delete/'.$ga->id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn-danger btn-sm"onclick="return confirm('Anda Yakin?')">Hapus</button>
                    </form>
            @endforeach
            
        </tbody>

    </table>
@endsection