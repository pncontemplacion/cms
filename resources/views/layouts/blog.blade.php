<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>

        @yield('title')

    </title>

    <!-- Styles -->
    <link href="{{ asset('css/page.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('images/favicon.png') }} ">
  </head>

  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
      <div class="container">

        <div class="navbar-left">
          <button class="navbar-toggler" type="button">&#9776;</button>
          <a class="navbar-brand" href="#">
            <img class="logo-dark" src="{{ asset('images/bloglogo.png')}}" height="200" width="250" alt="logo">
            <img class="logo-light" src="{{ asset('images/bloglogo.png')}}" height="200" width="250" alt="logo">
          </a>
        </div>

        <section class="navbar-mobile">
          <span class="navbar-divider d-mobile-none"></span>

          <ul class="nav nav-navbar">

          </ul>
        </section>

    <a class="btn btn-lg btn-round btn-success" href="{{ route('login') }}">Login</a>

      </div>
    </nav><!-- /.navbar -->

    <!-- Header -->
    @yield('header')


    <!-- Main Content -->
    @yield('content')


    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row gap-y align-items-center">

          <div class="col-6 col-lg-3">
          <a href="/"><img src="{{ asset('images/bloglogo.png')}}" height="100" width="100" alt="logo"></a>
          </div>

          <div class="col-6 col-lg-3 text-right order-lg-last">
            <div class="social">
              <a class="social-facebook" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
              <a class="social-twitter" href="https://twitter.com"><i class="fa fa-twitter"></i></a>
              <a class="social-instagram" href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
              <a class="social-dribbble" href="https://dribbble.com"><i class="fa fa-dribbble"></i></a>
            </div>
          </div>

        </div>
      </div>
    </footer><!-- /.footer -->


    <!-- Scripts -->
    <script src="{{ asset('js/page.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

  </body>
</html>
