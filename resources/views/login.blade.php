@extends('layout.index')
@section('konten')
<form action="{{ url('login') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="">Username</label>
    <input type="text" name="email" id="" class="form-control" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" name="password" id="" class="form-control" placeholder="password">
  </div>
  <input type="submit" value="submit" name="submit" class="btn btn-primary">
</form>

@endsection