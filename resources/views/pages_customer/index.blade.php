@extends('pages_customer.layout')

@section('content')
    <section class="banner-section position-relative">
        <div class="container">
            <div class="banner-slider">
                <div class="banner-slider-one pagination-square align-pagination-square">
                    <div class="banner-slider-single banner-animation-col">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-6">
                                <div class="banner-content">
                                    <h1 class="banner-title mb-40">
                                        Spring <span>Sale</span>
                                    </h1>
                                    <p>New Modern Stylist Fashionable Men's Wear holder bag holder.</p>
                                    <a href="product-category-grid.html" class="shop-now">Shop Now</a>
                                    <span class="border-line"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="single-banner-slider"
                                    style="background-image: url({{ asset('template_user/') }}/assets/img/crv.jpg)">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-slider-single banner-animation-col">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-6">
                                <div class="banner-content">
                                    <h1 class="banner-title mb-40">
                                        Lorem <span>Ipsum</span>
                                    </h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                    <a href="product-category-grid.html" class="shop-now">Shop Now</a>
                                    <span class="border-line"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="single-banner-slider"
                                    style="background-image: url({{ asset('template_user/') }}/assets/img/sportcar.jpg)">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-slider-single banner-animation-col">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-6">
                                <div class="banner-content">
                                    <h1 class="banner-title mb-40">
                                        Printing and <span>setting</span>
                                    </h1>
                                    <p>New Modern Stylist Fashionable Men's Wear holder bag holder.</p>
                                    <a href="product-category-grid.html" class="shop-now">Shop Now</a>
                                    <span class="border-line"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="single-banner-slider"
                                    style="background-image: url({{ asset('template_user/') }}/assets/img/hrv2.jpg)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End hero slider-->

    <!-- Feature -->
    <section class="featured section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 d-flex">
                    <div class="banner-box d-flex flex-fill align-items-center wow animate__animated animate__fadeInUp"
                        data-wow-delay="0">
                        <div class="banner-icon">
                            <i class="feather-headphones"></i>
                        </div>
                        <div class="banner-text">
                            <h3>Customer care support</h3>
                            <p>Get Help When You Need</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-flex">
                    <div class="banner-box d-flex align-items-center flex-fill wow animate__animated animate__fadeInUp"
                        data-wow-delay=".1s">
                        <div class="banner-icon">
                            <i class="feather-shield"></i>
                        </div>
                        <div class="banner-text">
                            <h3>Secure Payment</h3>
                            <p>Safe & Fast</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-flex">
                    <div class="banner-box d-flex align-items-center flex-fill wow animate__animated animate__fadeInUp"
                        data-wow-delay=".2s">
                        <div class="banner-icon">
                            <i class="feather-truck"></i>
                        </div>
                        <div class="banner-text">
                            <h3>Free Shipping</h3>
                            <p>On all orders</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature -->

    <!-- Top Products -->
    <section class="product-tab-section product-section">
        <div class="container">
            <div class="section-title wow animate__animated animate__fadeIn">
                <h3>TOP PRODUCTS</h3>
            </div>
            <div class="wow animate__animated animate__fadeIn mb-40">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-10 col-md-10">
                        <ul class="nav nav-tabs links" id="product-tab-nav" role="tablist">
                            @if ($type)
                                @foreach ($type as $vt)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="nav-tab-two" data-bs-toggle="tab"
                                            data-bs-target="#{{ $vt->vehicle_name }} " type="button" role="tab"
                                            aria-selected="false">
                                            {{ $vt->vehicle_name }} </button>
                                    </li>
                                @endforeach
                            @else
                            @endif
                        </ul>
                    </div>
                    <div class="col-12 col-lg-2 col-md-2 text-end">
                        <a href="product-category-list.html" class="view-more">View More</a>
                    </div>
                </div>
            </div>
            <!--End nav-tabs-->
            <div class="tab-content" id="product-tab-content">

                <div class="tab-pane fade" id="beauty" role="tabpanel">

                    <div class="row product-grid">

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('template_user/') }}/assets/img/crv.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>

                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">ADS Color Series Makeup Kit</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-20.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Makeup Kit & brush</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-21.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">La Era White Pearl Luxury</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-22.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Nivis beauty Lotions</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-23.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">DS Beauty Rollers</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-24.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Starawbeery red Lipstick</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-25.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Beauty Eyeshadow Highlighter</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-26.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Moisturising cream for face</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                    </div>
                </div>
                <!-- /Product Tab -->

                <!-- Product Tab-->

                <div class="tab-pane fade show active" id="tshirt" role="tabpanel">
                    <div class="row product-grid">

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('template_user/') }}/assets/img/hrv1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Double color Tshirt for Men</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('template_user/') }}/assets/img/mini.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Cotton Tshirt for Women</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('template_user/') }}/assets/img/jeep.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Cotton Tshirt for Men</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="{{ asset('template_user/') }}/assets/img/nyas.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Polo Tshirt for Men</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product box -->

                        <!-- /Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-14.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Tshirt for Men</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-15.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">White Tshirt for Men</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product box -->

                        <!-- /Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-16.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Printed Tshirt for Men</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-17.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Round Tshirt for Men</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                    </div>
                </div>
                <!-- /Product Tab -->

                <!-- Product Tab -->
                <div class="tab-pane fade" id="computer" role="tabpanel">
                    <div class="row product-grid">
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-27.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Apris Business Laptop </a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-28.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Multimedia USB Keyboard</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-29.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">RHD Plus Tablet</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-30.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Thin & Light Laptop</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-31.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">M75 Wireless Mouse</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-30.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Light Weight BH 453 Laptop</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-28.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">D5 Wired Keyboard white</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-27.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">M series Laptop</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                            <span class="old-price">$32.8</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                    </div>
                </div>
                <!-- /Product Tab -->

                <!-- Product Tab -->
                <div class="tab-pane fade" id="luxuriousbeauty" role="tabpanel">
                    <div class="row product-grid">

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-22.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Nivis beauty Lotions</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-23.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">DS Beauty Rollers</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-19.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">ADS Color Series Makeup Kit</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-25.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Beauty Eyeshadow Highlighter</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-26.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Moisturising cream for face</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-21.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">La Era White Pearl Luxury</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-24.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Starawbeery red Lipstick</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                        <!-- Product box -->
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-card mb-30">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img src="assets/img/shop/product-20.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Makeup Kit & brush</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product box -->

                    </div>
                </div>
            </div>
            <!-- /Product Tab -->

        </div>
    </section>
    <!-- /Top Products -->

    <!-- Electrnoics Section -->
    <section class="electrnoics-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex">
                    <div class="banner-img wow animate__animated animate__fadeInUp flex-fill" data-wow-delay="0">
                        <img src="{{ asset('template_user/') }}/assets/img/logoNew.png" alt=""
                            height="300px">
                        <div class="banner-text">
                            <h4>CRV Facelift </h4>
                            <p>Best selling 2 weeks</p>
                            <a href="product-category-list.html" class="btn btn-xs">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex">
                    <div class="banner-img wow animate__animated animate__fadeInUp flex-fill" data-wow-delay=".2s">
                        <img src="{{ asset('template_user/') }}/assets/img/crv.jpg" alt="">
                        <div class="banner-text">
                            <h4>Electrnoics</h4>
                            <p>Whatever you need to get the job done, be it batteries and capping nails</p>
                            <a href="product-category-list.html" class="btn btn-xs">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Electrnoics Section -->

    <!-- Category -->
    <section class="section-category">
        <div class="container">
            <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                <h3 class="">POPULAR CATEGORIES</h3>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="category-slider arrow-center position-relative">
                        <div class="slider-arrow slider-arrow-two carousel-category-arrow"
                            id="carousel-category-arrows"></div>
                        <div class="carousel-category carousel-arrow-center" id="carousel-category">

                            <!-- Category Grid -->
                            <div class="category-grid wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="category-img-col">
                                    <div class="category-img category-img-zoom">
                                        <a href="view-product.html">
                                            <img class="default-img" src="assets/img/shop/category-01.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h4><a href="view-product.html">SUV</a></h4>
                                    <p>La Era White Pearl Luxury Creme Soft Soap</p>
                                    <a href="view-product.html" class="view-more">View More</a>
                                </div>
                            </div>
                            <!-- /Category Grid -->

                            <!-- Category Grid -->
                            <div class="category-grid wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="category-img-col">
                                    <div class="category-img category-img-zoom">
                                        <a href="view-product.html">
                                            <img class="default-img" src="assets/img/shop/category-02.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h4><a href="view-product.html">Luxurious Car</a></h4>
                                    <p>La Era White Pearl Luxury Creme Soft Soap</p>
                                    <a href="view-product.html" class="view-more">View More</a>
                                </div>
                            </div>
                            <!-- /Category Grid -->

                            <!-- Category Grid -->
                            <div class="category-grid wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="category-img-col">
                                    <div class="category-img category-img-zoom">
                                        <a href="view-product.html">
                                            <img class="default-img" src="assets/img/shop/category-03.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h4><a href="view-product.html">Jeep</a></h4>
                                    <p>Fashion Angels Fashion Full Size Sketch Book</p>
                                    <a href="view-product.html" class="view-more">View More</a>
                                </div>
                            </div>
                            <!-- /Category Grid -->

                            <!-- Category Grid -->
                            <div class="category-grid wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="category-img-col">
                                    <div class="category-img category-img-zoom">
                                        <a href="view-product.html">
                                            <img class="default-img" src="assets/img/shop/category-04.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h4><a href="view-product.html">MPV</a></h4>
                                    <p>Desktop PC Inspiron 24 5000 All-In-One Desktop</p>
                                    <a href="view-product.html" class="view-more">View More</a>
                                </div>
                            </div>
                            <!-- /Category Grid -->

                            <!-- Category Grid -->
                            <div class="category-grid wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="category-img-col">
                                    <div class="category-img category-img-zoom">
                                        <a href="view-product.html">
                                            <img class="default-img" src="assets/img/shop/category-02.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="category-content">
                                    <h4><a href="view-product.html">Luxurious Product</a></h4>
                                    <p>Fashion white pearl luxurious cream soft soap</p>
                                    <a href="view-product.html" class="view-more">View More</a>
                                </div>
                            </div>
                            <!-- /Category Grid -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Category -->

    <!-- Products -->
    <section class="feature-products">
        <div class="container">
            <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                <h3>FEATURED PRODUCTS</h3>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="feature-product-slider arrow-center position-relative">
                        <div class="slider-arrow slider-arrow-two carousel-4-columns-arrow"
                            id="carousel-4-columns-arrows"></div>
                        <div class="carousel-4-columns carousel-arrow-center" id="carousel-4-columns">

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img class="default-img" src="assets/img/shop/product-11.jpg"
                                                alt="">
                                            <img class="hover-img" src="assets/img/shop/product-11.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Cotton Tshirt for Women</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img class="default-img" src="assets/img/shop/product-10.jpg"
                                                alt="">
                                            <img class="hover-img" src="assets/img/shop/product-10.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Shade Tshirt for Men</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img class="default-img" src="assets/img/shop/product-12.jpg"
                                                alt="">
                                            <img class="hover-img" src="assets/img/shop/product-12.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Tshirt for Men</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img class="default-img" src="assets/img/shop/product-13.jpg"
                                                alt="">
                                            <img class="hover-img" src="assets/img/shop/product-13.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Cotton Tshirt for Men.</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                            <span class="old-price">$ 450.00</span>
                                            <span class="discount-tag">-72%</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img class="default-img"
                                                src="{{ asset('template_user/') }}/assets/img/suv.jpg" alt="">
                                            <img class="hover-img"
                                                src="{{ asset('template_user/') }}/assets/img/suv.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">Rounded T-Shirt</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Products -->

    <!-- Products Deals -->
    <section class="deals-section">
        <div class="container">
            <div class="section-title wow animate__animated animate__fadeIn">
                <h3 class="">TOP DEALS</h3>
            </div>
            <div class="row">
                <div class="col-lg-3 d-none d-lg-flex wow animate__animated animate__fadeIn">
                    <div class="banner-pro">
                        <img class="img-fluid" src="{{ asset('template_user/') }}/assets/img/crv.jpg" alt="">
                        <div class="banner-text">
                            <h4>SUV</h4>
                            <a href="view-product.html" class="view-more">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                    <div class="deals-slider arrow-center position-relative">
                        <div class="slider-arrow slider-arrow-two carousel-3-columns-arrow"
                            id="carousel-3-columns-arrows"></div>
                        <div class="carousel-3-columns carousel-arrow-center" id="carousel-3-columns">

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img class="default-img"
                                                src="{{ asset('template_user/') }}/assets/img/hrv2.jpg" alt="">
                                            <img class="hover-img"
                                                src="{{ asset('template_user/') }}/assets/img/hrv2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">SAMSUNG Crystal 4K Pro 146 ...</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img class="default-img" src="assets/img/shop/product-02.png"
                                                alt="">
                                            <img class="hover-img" src="assets/img/shop/product-02.png"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">LG UHD 164 cm (65 inch) Ultra...</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img class="default-img" src="assets/img/shop/product-01.png"
                                                alt="">
                                            <img class="hover-img" src="assets/img/shop/product-01.png"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">SAMSUNG Crystal 4K Pro 146 ...</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                            <!-- Product box -->
                            <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-col">
                                    <div class="product-img product-img-zoom">
                                        <a href="view-product.html">
                                            <img class="default-img" src="assets/img/shop/product-02.png"
                                                alt="">
                                            <img class="hover-img" src="assets/img/shop/product-02.png"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-inner-details">
                                        <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        <a aria-label="Search" class="product-btn" href="#"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a href="cart.html" aria-label="Cart" class="product-btn"><i
                                                class="fi-rs-shopping-cart"></i></a>
                                    </div>
                                    <div class="product-badge">
                                        <span class="best">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2><a href="view-product.html">LG UHD 164 cm (65 inch) Ultra...</a></h2>
                                    <div class="product-card-bottom mt-0">
                                        <div class="product-price">
                                            <span>$ 350.00</span>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="rating d-inline-block">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                            <span class="ml-5"> (3.5)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Product box -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Products Deals -->

    <!-- Sales-->
    <section class="sales-section">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-sm-5 mb-md-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                    <div class="section-title animated animated">
                        <h3>ON-SALE PRODUCT</h3>
                    </div>

                    <div class="product-main-grid animated animated">
                        <div class="sales-slider arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-two carousel-sale-arrow" id="carousel-sale-arrows">
                            </div>
                            <div class="carousel-sale carousel-arrow-center" id="carousel-sale">
                                <div class="sale-card">
                                    <article class="align-items-center">
                                        <div class="row">
                                            <figure class="col-md-4 mb-0">
                                                <a href="view-product.html"><img src="assets/img/shop/product-21.jpg"
                                                        alt=""></a>
                                            </figure>
                                            <div class="col-md-8 mb-0">
                                                <h6>
                                                    <a href="view-product.html">La Era White Pearl Luxury</a>
                                                </h6>
                                                <div class="product-price">
                                                    <span>$ 350.00</span>
                                                    <span class="old-price">$ 450.00</span>
                                                    <span class="discount-tag">-72%</span>
                                                </div>
                                                <div class="product-rating-info mt-2">
                                                    <div class="rating d-inline-block">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                        <i class="far fa-star"></i>
                                                        <span class="ml-5"> (3.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-tag">Beauty</div>
                                    </article>
                                    <article class="align-items-center">
                                        <div class="row">
                                            <figure class="col-md-4 mb-0">
                                                <a href="view-product.html"><img src="assets/img/shop/product-10.jpg"
                                                        alt=""></a>
                                            </figure>
                                            <div class="col-md-8 mb-0">
                                                <h6>
                                                    <a href="view-product.html">Double colored Mens T-shirt</a>
                                                </h6>
                                                <div class="product-price">
                                                    <span>$ 350.00</span>
                                                    <span class="old-price">$ 450.00</span>
                                                </div>
                                                <div class="product-rating-info mt-2">
                                                    <div class="rating d-inline-block">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                        <i class="far fa-star"></i>
                                                        <span class="ml-5"> (3.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-tag">Mens T-shirt</div>
                                    </article>
                                </div>
                                <div class="sale-card">
                                    <article class="align-items-center">
                                        <div class="row">
                                            <figure class="col-md-4 mb-0">
                                                <a href="view-product.html"><img src="assets/img/shop/product-19.jpg"
                                                        alt=""></a>
                                            </figure>
                                            <div class="col-md-8 mb-0">
                                                <h6>
                                                    <a href="view-product.html">ADS Color Series Makeup Kit</a>
                                                </h6>
                                                <div class="product-price">
                                                    <span>$ 350.00</span>
                                                    <span class="old-price">$ 450.00</span>
                                                </div>
                                                <div class="product-rating-info mt-2">
                                                    <div class="rating d-inline-block">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                        <i class="far fa-star"></i>
                                                        <span class="ml-5"> (3.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-tag">Beauty</div>
                                    </article>
                                    <article class="align-items-center">
                                        <div class="row">
                                            <figure class="col-md-4 mb-0">
                                                <a href="view-product.html"><img src="assets/img/shop/product-23.jpg"
                                                        alt=""></a>
                                            </figure>
                                            <div class="col-md-8 mb-0">
                                                <h6>
                                                    <a href="view-product.html">Era Beauty Rollers</a>
                                                </h6>
                                                <div class="product-price">
                                                    <span>$ 350.00</span>
                                                    <span class="old-price">$ 450.00</span>
                                                </div>
                                                <div class="product-rating-info mt-2">
                                                    <div class="rating d-inline-block">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                        <i class="far fa-star"></i>
                                                        <span class="ml-5"> (3.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-tag">Beauty</div>
                                    </article>
                                </div>
                                <div class="sale-card">
                                    <article class="align-items-center">
                                        <div class="row">
                                            <figure class="col-md-4 mb-0">
                                                <a href="view-product.html"><img src="assets/img/shop/product-16.jpg"
                                                        alt=""></a>
                                            </figure>
                                            <div class="col-md-8 mb-0">
                                                <h6>
                                                    <a href="view-product.html">Printed Mens T-shirt</a>
                                                </h6>
                                                <div class="product-price">
                                                    <span>$ 350.00</span>
                                                    <span class="old-price">$ 450.00</span>
                                                </div>
                                                <div class="product-rating-info mt-2">
                                                    <div class="rating d-inline-block">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                        <i class="far fa-star"></i>
                                                        <span class="ml-5"> (3.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-tag">Mens T-shirt</div>
                                    </article>
                                    <article class="align-items-center">
                                        <div class="row">
                                            <figure class="col-md-4 mb-0">
                                                <a href="view-product.html"><img src="assets/img/shop/product-26.jpg"
                                                        alt=""></a>
                                            </figure>
                                            <div class="col-md-8 mb-0">
                                                <h6>
                                                    <a href="view-product.html">Moisturising Cream for face</a>
                                                </h6>
                                                <div class="product-price">
                                                    <span>$ 350.00</span>
                                                    <span class="old-price">$ 450.00</span>
                                                </div>
                                                <div class="product-rating-info mt-2">
                                                    <div class="rating d-inline-block">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                        <i class="far fa-star"></i>
                                                        <span class="ml-5"> (3.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-tag">Beauty</div>
                                    </article>
                                </div>
                                <div class="sale-card">
                                    <article class="align-items-center">
                                        <div class="row">
                                            <figure class="col-md-4 mb-0">
                                                <a href="view-product.html"><img src="assets/img/shop/product-22.jpg"
                                                        alt=""></a>
                                            </figure>
                                            <div class="col-md-8 mb-0">
                                                <h6>
                                                    <a href="view-product.html">Beauty Body Lotion</a>
                                                </h6>
                                                <div class="product-price">
                                                    <span>$ 350.00</span>
                                                    <span class="old-price">$ 450.00</span>
                                                </div>
                                                <div class="product-rating-info mt-2">
                                                    <div class="rating d-inline-block">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                        <i class="far fa-star"></i>
                                                        <span class="ml-5"> (3.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-tag">Beauty</div>
                                    </article>
                                    <article class="align-items-center">
                                        <div class="row">
                                            <figure class="col-md-4 mb-0">
                                                <a href="view-product.html"><img
                                                        src="{{ asset('template_user/') }}/assets/img/sedan.jpg"
                                                        alt=""></a>
                                            </figure>
                                            <div class="col-md-8 mb-0">
                                                <h6>
                                                    <a href="view-product.html">Mens T-shirt</a>
                                                </h6>
                                                <div class="product-price">
                                                    <span>$ 350.00</span>
                                                    <span class="old-price">$ 450.00</span>
                                                </div>
                                                <div class="product-rating-info mt-2">
                                                    <div class="rating d-inline-block">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                        <i class="far fa-star"></i>
                                                        <span class="ml-5"> (3.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-tag">Mens T-Shirt</div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Sales -->
@endsection
