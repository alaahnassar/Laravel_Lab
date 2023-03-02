<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{route('get')}}">All Posts</a>

          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{route('user.index')}}">All users</a>
          </li>
          <li class="nav-item float-end">
            <a class="nav-link " aria-current="page" href="#">{{ Auth::user()->name }}</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
