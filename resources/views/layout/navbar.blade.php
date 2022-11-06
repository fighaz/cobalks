<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar w/ text</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/') }}">Home </a>
        </li>
        @if (empty(session('iduser')))
        <li class="nav-item">
          <a class="nav-link" href="{{ url('login') }}">Login </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('daftar') }}">Daftar</a>
        </li>
        @endif
      </ul>
      <span class="navbar-text">
        {{ session('name') }}
      </span>
      @if (!empty(session('iduser')))
      <li>
        <a href="{{ url('keluar') }}">Keluar</a>
      </li>
      @endif
    </div>
  </nav>