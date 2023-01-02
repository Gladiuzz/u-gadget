@extends('layouts.guest_app')

@section('content')
        <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{asset('assets_user/img/ip3.jpg')}}" class="d-block w-100 img-fluid" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <div class="container">
                        <div class="row justify-content-start text-left">
                            <div class="col-lg-8 mx-auto">
                              <h2 class="text-dark">iPhone 14</h2>
                                <p class="text-dark">Introduce Our New Product</p>
                                <a class="btn btn-primary cssbuttons-io" href="#" role="button"><span>SHOP NOW</span></a>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('assets_user/img/ip3.jpg')}}" class="d-block w-100 img-fluid" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <div class="container">
                      <div class="row justify-content-start text-left">
                          <div class="col-lg-8 mx-auto">
                            <h2 class="text-dark">iPhone 14</h2>
                            <p class="text-dark">Introduce Our New Product</p>
                            <a class="btn btn-primary cssbuttons-io" href="#" role="button"><span>SHOP NOW</span></a>
                          </div>
                      </div>
                  </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('assets_user/img/ip3.jpg')}}" class="d-block w-100 img-fluid" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <div class="container">
                      <div class="row justify-content-start text-left">
                          <div class="col-lg-8 mx-auto">
                          <h2 class="text-dark">iPhone 14</h2>
                            <p class="text-dark">Introduce Our New Product</p>
                            <a class="btn btn-primary cssbuttons-io" href="#" role="button"><span>SHOP NOW</span></a>
                          </div>
                      </div>
                  </div>
                  </div>
                </div>
              </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <!-- End Carousel -->

        <!-- middle -->
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-inner pt-3">
                <div class="carousel-item active">
                  <img src="{{asset('assets_user/img/ipad.jpg')}}" class="d-block w-100 img-fluid" alt="...">
                  <div class="carousel-caption d-none d-md-block" style="left: 68%; top: 72%; transform: translateY(-95%)">
                    <div class="container">
                        <div class="row justify-content-start text-left">
                            <div class="col-lg-8 mx-auto"">
                                <h4 class="text-dark">extraordinary. luxurious</h4>
                                <a class="btn btn-primary cssbuttons-io" href="#" role="button"><span>Detail</span></a>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        <!-- End Middle -->

        <!-- Lower -->
        <section class="lower" id="lower">
            <div class="container pt-5 text-center">
                <div class="row justify-content-center">
                      @foreach($products as $item)
                  <div class="col-6">
                  <div class="card text-bg-dark">
                      <img src="{{asset('storage/product_image/'.$item->image[0]['url_image'])}}" class="card-img" style="height: 425px;" alt="...">
                      <div class="card-img-overlay">
                      <h2 class="card-title pt-4">{{$item->name}}</h2>
                      <p class="card-text">{!! Str::limit($item->description, 10, ' ...') !!}</p>
                      <a href="#" class="card-text nav-link text-primary"><small>Detail</small></a>
                      </div>
                  </div>
                  </div>
                  @endforeach
                  </div>
              </div>
        </section>
        <!-- End Lower -->

          <!-- Product -->
          <section class="collection" id="collection">
          <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-inner pt-5">
                <div class="carousel-item active">
                  <img src="{{asset('assets_user/img/ip5.jpeg')}}" class="d-block w-100 img-fluid" alt="...">
                  <div class="carousel-caption d-none d-md-block" style="left: 68%; top: 65%; transform: translateY(-95%)">
                    <div class="container">
                        <div class="row justify-content-start text-left">
                            <div class="col mx-auto"">
                                <h2 class="text-dark">Redesign</h2>
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
@endsection
