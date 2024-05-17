<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGM| {{ $title }}</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/tampilan.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<!-- navbar -->
<nav class="navbar nav-pills navbar-expand-lg navbar-dark position-fixed w-100" style="background-color: #517980;">
  <div class="container">
    <a class="navbar-brand" href="/">
    <img src="img/logofix.png" alt="Logo" width="40" class="d-inline-block align-text-center">
      ANJHANNI GILI MAS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{ ($title === 'Home') ? 'active' : ''}} mx-2" href="/">Home</a>
        <a class="nav-link {{ ($title === 'Layanan') ? 'active' : ''}} mx-2" href="/layanan">Layanan</a>
        <a class="nav-link {{ ($title === 'About') ? 'active' : ''}} mx-2" href="/about">About</a>
      </div>
    </div>
  </div>
</nav>

<!-- Isi Konten -->
<div class="container mt-10">
  <img src="img/Line.png" class="image position-absolute">
  @yield('menu')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


@viteReactRefresh
@vite('resources/js/app.js')
</body>
</html>