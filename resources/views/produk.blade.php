@extends('layouts.guest_app')

@section('content')
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
@endsection
