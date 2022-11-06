@extends('layout.index')
@section('konten')
<form action="{{ url('games/store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Nama</label>
        <input class="form-control" required type="text" name="name" value="">
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <textarea class="form-control" name="description" id="" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="">Homepage</label>
        <input class="form-control" type="text" name="homepage" value="">
    </div>
    <div class="form-group">
        <label for="">Gambar</label>
        <input type="file" class="form-control" name="cover">
      </div>
    <input type="submit" value="submit" class="btn btn-primary" name="submit">
</form>
 
@endsection
