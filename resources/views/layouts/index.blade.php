<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " href="{{ route('home') }}">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('siswa') }}">Siswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('kelas') }}">Kelas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('nilai') }}">Nilai</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('profile') }}">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Keluar</a>
              </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>