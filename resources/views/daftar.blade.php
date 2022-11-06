@extends('layout.index')
@section('konten')
    <form action="{{ url('daftar') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="name" value="">
        </div>
        <div class="form-group mt-2">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" value="">
        </div>
        <div class="form-group mt-2">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" value="">
        </div>
        <div class="form-group mt-2">
            <label for="">Role</label>
            <select class="custom-select" name="role" id="">
                <option value="Gamer">Gamer</option>
                <option value="Developer">Developer</option>
                <option value="Publisher">Publisher</option>
            </select>
        </div>
        <input type="submit" value="submit" name="submit" class="btn btn-primary">
    </form>
@endsection