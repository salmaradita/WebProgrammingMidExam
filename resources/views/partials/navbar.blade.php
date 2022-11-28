<nav class="navbar bg-warning">
    <div class="container-fluid justify-content-center mb-3">
      <span class="navbar-brand mb-0 text-white h1">Giant Book Supplier</span>
    </div>
</nav>

<nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid ">
      {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-primary" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/category">Fantasy</a></li>
              <li><a class="dropdown-item" href="">Science Fiction</a></li>
              <li><a class="dropdown-item" href="#">Self Development</a></li>
              <li><a class="dropdown-item" href="#">Romance</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="/publisher">Publisher</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="/contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
