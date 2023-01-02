<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">


        <!-- CSS Custom -->
        <link rel="stylesheet" href="{{asset('assets_user/button.css')}}">
        <link rel="stylesheet" href="{{asset('assets_user/carousel.css')}}">
        <link rel="stylesheet" href="{{asset('assets_user/card.css')}}">
        <link rel="stylesheet" href="{{asset('assets_user/card_produk.css')}}">
        <link rel="stylesheet" href="{{asset('assets_user/cart.css')}}">

  </head>
  <body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #f5f5f7;">
        <div class="container">
          <a class="navbar-brand" style="font-weight: 500;" href="#">U-Gadget</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('product.guest')}}">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('cart')}}"><i class="bi bi-cart"></i></a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
            @if (!Auth::user())
            <a class="btn btn-primary cssbuttons-io" type="submit" href="#" role="button"><span>Search</span></a>
            <a class="btn btn-primary cssbuttons-io" href="{{ route('login') }}" role="button"><span>Login</span></a>
            @else

              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
              </a><!-- End Profile Iamge Icon -->

              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li>
                    <form action="{{route('logout')}}" method="POST">
                        {{ csrf_field() }}
                        <button class="dropdown-item d-flex align-items-center">
                          <i class="bi bi-box-arrow-right"></i>
                          <span>Sign Out</span>
                        </button>
                    </form>
                </li>

              </ul>
            @endif
          </div>
        </div>
      </nav>
    <!-- End Navbar -->

    @yield('content')

    <!-- Footer -->
    <footer class="bg-trasnparent text-dark text-center p-3" style="background-color: #f5f5f7;">
      <p>Created with love <i class="bi bi-heart-fill text-danger"></i> by <a class="text-dark fw-bold" href="https://www.instagram.com/fammyos/">U-Gadget</a></p>
    </footer>
    <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
