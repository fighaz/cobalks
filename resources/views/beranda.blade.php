    @extends('layout.index')
    @section('konten')
    <div class="container my-3 "
     <form action="{{ url('search') }}" method="get" >
       <div class="row">
        <input type="text" name="search" id="" placeholder="Cari..." class="form-control col-md-7 ml-4" value="{{ old('search') }}">
        <input type="submit" value="submit" class="btn btn-dark ml-2">
       </div>
       
     </form>
    </div>
    <div class="container mt-2">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">>
              @for($i=0;$i<=count($data);$i++)
              <li data-target="#carouselExampleCaptions" data-slide-to="{{$i}}" class="active"></li>
              @endfor
            </ol>           
            <div class="carousel-inner">   
              @foreach ($data as $d)   
              <div class="carousel-item active">
                <img src="{{ asset('img/'.$d->cover) }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>{{ $d->name }}</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>   
              @endforeach                         
            </div>           
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>
      </div>
      <div class="container">
        <div class="row mt-2 ">
          @foreach ($data as $d)
          <div class="card mx-3" style="width: 18rem;">
            <img src="{{ asset('img/'.$d->cover) }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $d->name }}</h5>
            <p class="card-text">{{ $d->homepage }}</p>
            <a href="{{ url('detail/'.$d->id) }}" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
          @endforeach
            
        </div>    
      </div>
    </div>
    @endsection
      