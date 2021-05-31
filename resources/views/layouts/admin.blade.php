<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Generic Business Site</title>
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <!-- Custom styles  -->
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

</head>

<body>

  <div class="site-heading text-center text-white">
    <img class="main-logo" src="{{ asset('img/logo.png') }}" alt="logo" >
    <p class="admin-title">Admin panel</p>
  </div>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-2" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Lorem Ipsum</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars" style="color:rgb(0, 0, 0); font-size:28px;"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded {{request()->routeIs('home') ? 'nav-link-active' : ''}}" href="{{route('home.admin')}}">Main</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded {{request()->routeIs('events.admin') ? 'nav-link-active' : ''}}" href="{{route('events.admin')}}">Events</a>
          </li>
          {{-- <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded {{request()->routeIs('gallery.admin') ? 'nav-link-active' : ''}}" href="{{route('gallery.admin')}}">Gallery</a>
          </li> --}}
        </ul>
      </div>
    </div>
  </nav>
  @yield('content')
  <footer class="footer text-white text-center pt-0 pb-2 mt-4">
      <div class="container">
        <p class="m-0 footer-text">Copyright &copy; José Bordón 2021</p>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>

  </body>

  </html>
