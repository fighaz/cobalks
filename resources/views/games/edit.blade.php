@extends('layout.index')
@section('konten')
<form action="{{ url('games/update/'.$game->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Nama</label>
        <input class="form-control" type="text" name="name" value="{{ $game->name }}">
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <textarea class="form-control" name="description" rows="5">{{ $game->description }}"</textarea>
    </div>
    <div class="form-group">
        <label for="">Homepage</label>
        <input class="form-control" type="text" name="homepage" value="{{ $game->homepage }}">
    </div>
    <div class="form-group">
        <label for="">Gambar</label>
        <input class="form-control" type="file" name="cover">
      </div>
    <input type="submit" value="submit" class="btn btn-primary">
</form>
 
@endsection
