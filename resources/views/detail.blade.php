@extends('layout.index')
@section('konten')
<div class="container">
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @foreach ($asset as $a)           
          <div class="carousel-item active">
            <img src="{{ asset('img/'.$a->path) }}" class="d-block w-100" alt="">
          </div>
          @endforeach
        </div>
       <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
        <h2>{{ $data->name }}</h2>
    <hr>
        <div class="row">
            <div class="col">
                {{ $data->homepage }}
            </div>
            <div class="col">
                <h4>{{ $dev->name }}</h4>
        </div>
    
    </div>
    <hr>
    <h5>Description</h5>
    <p>{{ $data->description }}</p>
    <hr>
    <h3>Komentar</h3>
    @if (!empty(session('iduser')))
    <div class="form-group">
      <form action="{{ url('/komen/store/'.session('iduser').'/'.$id) }}" method="post">
        @csrf
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" name="message" rows="3"></textarea>
        <input class="btn btn-primary" type="submit" value="submit">
      </form>       
    </div>
    @endif
    
    <hr>
    <div class="container-fluid">
      @foreach ($comment as $c)
      <div class="card mt-2">
        <div class="card-header">
          Quote
        </div>
        <hr>
        <div class="card-body mt-2">
          <blockquote class="blockquote mb-0">
            <p>{{ $c->message }}</p>
            <footer class="blockquote-footer">{{ $c->user->name }} </footer>
          </blockquote>
        </div>
      </div>
      @endforeach
     
   </div>
</div>
    
</div>
@endsection