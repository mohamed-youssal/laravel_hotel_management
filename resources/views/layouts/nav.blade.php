<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">M-Hotel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('room.index')}}">All rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('person.create')}}">Reserve</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('person.index')}}">All reservations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('similator')}}">Similator</a>
          </li>
        </ul>
        <form class="d-flex" method="GET" action="{{route('search')}}">
          @csrf
          <input class="form-control me-sm-2" type="search" name="search" placeholder="Search by client name">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>