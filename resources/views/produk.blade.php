<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <!-- CSS Custom -->
    <link rel="stylesheet" href="{{asset('assets_user/button.css')}}">
    <link rel="stylesheet" href="{{asset('assets_user/carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets_user/card.css')}}">
    <link rel="stylesheet" href="{{asset('assets_user/card_produk.css')}}">
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
                <a class="nav-link" href="#">Category</a>
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

    <!-- Product -->
    <section class="collection" id="collection">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('assets_user/img/ip5.jpeg')}}" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="left: 68%; top: 65%; transform: translateY(-95%)">
                        <div class="container">
                            <div class="row justify-content-start text-left">
                                <div class="col mx-auto"">
                          <h2 class=" text-dark">Redesign</h2>
                                    <p class="text-dark">and regenerated with new abilities</p>
                                    <a class="btn btn-primary cssbuttons-io" href="#" role="button"><span>Detail</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product -->

    <!-- Card Product -->
    <section class="section-products">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-lg-6">
                    <div class="header">
                        <h3>Featured Product</h3>
                        <h2>Popular Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Product -->
                @foreach ($products as $item)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <form action="{{route('add.cart')}}" enctype="multipart/form-data" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="product_id" value="{{$item->id}}">
                        @foreach ($item->categorys as $category)
                        <input type="hidden" name="product_category_id" value="{{$category->id}}">
                        @endforeach
                        <div id="product-1" class="single-product">
                            <div class="part-1">
                                <img src="{{asset('storage/product_image/'.$item->image[0]['url_image'])}}" class="card-img" style="height: 425px;" alt="...">
                                <ul>
                                    <li><button><i class="fas fa-shopping-cart"></i></button></li>
                                    <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                    <li><a href="#"><i class="fas fa-expand"></i></a></li>
                                </ul>
                            </div>
                            <div class="part-2">
                                <h3 class="product-title">{{$item->name}}</h3>
                                <h4 class="product-price">@currency($item->price)</h4>
                            </div>
                        </div>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Card Product -->

    <!-- Footer -->
    <footer class="bg-trasnparent text-dark text-center p-3" style="background-color: #f5f5f7;">
        <p>Created with love <i class="bi bi-heart-fill text-danger"></i> by <a class="text-dark fw-bold" href="https://www.instagram.com/fammyos/">U-Gadget</a></p>
    </footer>
    <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
