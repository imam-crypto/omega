   <!-- Header -->
   <header class="header">
       <div class="mobile-view">
           <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
       </div>

       <div class="header-middle d-none d-lg-block">
           <div class="container">
               <div class="header-col">
                   <div class="logo header-logo">
                       <a href="index.html"><img src="{{ asset('template_user/') }}/assets/img/logoNew.png" height="50px"
                               alt="logo"></a>
                   </div>
                   <div class="header-right">
                       <div class="header-search">
                           <form action="product-category-list.html">
                               <select class="select-active">
                                   <option>All Categories</option>
                                   <option>Tshirt for Men</option>
                                   <option>Computers</option>
                                   <option>Electrnoics</option>
                                   <option>Books</option>
                                   <option>Beauty</option>
                                   <option>Television</option>
                               </select>
                               <input type="text" placeholder="Search for items...">
                               <input type="submit" name="form-submit" class="submit-btn">
                           </form>
                       </div>
                       <div class="header-details">
                           <div class="header-inner">
                               <div class="header-inner-icon">

                                   <a class="small-cart-icon" href="cart.html">
                                       <img src="{{ asset('template_user/') }}/assets/img/logoNew.png" height="50px"
                                           alt="">
                                       {{-- <span class="pro-count blue">New</span> --}}
                                   </a>
                                   <div class="cart-dropdown-wrap">
                                       <ul>
                                           <li>
                                               <div class="shopping-cart-img">
                                                   <a href="view-product.html"><img
                                                           src="{{ asset('template_user/') }}/assets/img/shop/thumbnail-1.jpg"
                                                           alt=""></a>
                                               </div>
                                               <div class="shopping-cart-title">
                                                   <h4><a href="view-product.html">Daisy Casual Bag</a></h4>
                                                   <h4><span>1 × </span>$800.00</h4>
                                               </div>
                                               <div class="shopping-cart-delete">
                                                   <a href="#"><i class="fi-rs-cross-small"></i></a>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="shopping-cart-img">
                                                   <a href="view-product.html"><img
                                                           src="assets/img/shop/thumbnail-2.jpg" alt=""></a>
                                               </div>
                                               <div class="shopping-cart-title">
                                                   <h4><a href="view-product.html">Corduroy Shirts</a></h4>
                                                   <h4><span>1 × </span>$3200.00</h4>
                                               </div>
                                               <div class="shopping-cart-delete">
                                                   <a href="#"><i class="fi-rs-cross-small"></i></a>
                                               </div>
                                           </li>
                                       </ul>
                                       <div class="shopping-cart-footer">
                                           <div class="shopping-cart-total">
                                               <h4>Total <span>$4000.00</span></h4>
                                           </div>
                                           <div class="shopping-cart-btn">
                                               <a href="cart.html" class="outline">View cart</a>
                                               <a href="checkout.html">Checkout</a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="header-bottom sticky-bar">
           <div class="container">
               <div class="header-col">
                   <div class="logo header-logo d-block d-lg-none">
                       <a href="index.html"><img src="assets/img/logo.png" alt="logo"></a>
                   </div>
                   <div class="header-nav d-none d-lg-flex">

                       <div class="main-menu d-none d-lg-block">
                           <nav>
                               <ul>
                                   <li>
                                       <a class="active" href="index.html">Home</a>
                                   </li>
                                   <li>
                                       <a href="#">Type<i class="fi-rs-angle-down"></i></a>
                                       <ul class="has-submenu">
                                           @if ($type)
                                               @foreach ($type as $tp)
                                                   <li> <a href="#" style="vertical-align: top;">
                                                           {{ $tp->vehicle_name }}
                                                       </a>
                                                   </li>
                                               @endforeach
                                           @else
                                               <h2>Data Not Found</h2>
                                           @endif
                                       </ul>
                                   </li>
                                   <li>
                                       <a class="" href="index.html">Best Seller</a>
                                   </li>

                                   <li>
                                       <a class="" href="index.html">Blog</a>
                                   </li>
                                   <li>
                                       <a href="#">Blog <i class="fi-rs-angle-down"></i></a>
                                       <ul class="has-submenu">
                                           <li><a href="blog-list.html">Blog List</a></li>
                                           <li><a href="blog-grid.html">Blog Grid</a></li>
                                           <li><a href="blog-details.html">Blog Details</a></li>
                                       </ul>
                                   </li>

                                   <li>
                                       <a href="#">Pages <i class="fi-rs-angle-down"></i></a>
                                       <ul class="has-submenu">
                                           <li><a href="about-us.html">About Us</a></li>
                                           <li><a href="account.html">My Account</a></li>
                                           <li><a href="login.html">Login</a></li>
                                           <li><a href="register.html">Register</a></li>
                                           <li><a href="contact-us.html">Contact Us</a></li>
                                           <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                           <li><a href="terms-conditions.html">Terms of Service</a></li>
                                       </ul>
                                   </li>
                                   <li>
                                       <a href="#">Account <i class="fi-rs-angle-down"></i></a>
                                       <ul class="has-submenu">
                                           @auth
                                               <span>Hello {{ Auth::User()->name }}</span>
                                               <li><a href="register.html">Profile</a></li>
                                               <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                   class="d-none">
                                                   @csrf
                                               </form>
                                               <li><a href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">Logout</a>
                                               </li>
                                           @endauth
                                           <li><a href="{{ route('new.login') }} ">Login</a>
                                           </li>
                                       </ul>
                                   </li>
                               </ul>
                           </nav>
                       </div>
                   </div>
                   <div class="contact-item d-none d-lg-flex">
                       <img src="{{ asset('template_user/') }}/assets/img/icons/icon-headphone-white.svg"
                           alt="contact-number">
                       <p>Hubungi Kami<span>+123 5678 890</span></p>
                   </div>
                   <div class="header-inner-icon d-block d-lg-none">
                       <div class="bar-icon">
                           <span class="bar-icon-one"></span>
                           <span class="bar-icon-two"></span>
                           <span class="bar-icon-three"></span>
                       </div>
                   </div>

               </div>
           </div>
       </div>
   </header>
   <div class="main-menu-wrapper">
       <div class="mobile-header-inner">
           <div class="mobile-header-top">
               <div class="mobile-header-logo">
                   <a href="index.html"><img src="assets/img/logo.png" alt="logo" /></a>
               </div>
               <div class="mobile-menu-close close-col menu-close-position">
                   <button class="close-style">
                       <i class="icon-top"></i>
                       <i class="icon-bottom"></i>
                   </button>
               </div>
           </div>
           <div class="mobile-header-content">
               <div class="mobile-search mobile-search-three mobile-header-border">
                   <form action="product-category-list.html">
                       <input type="text" placeholder="Search for items…" />
                       <button type="submit"><i class="fi-rs-search"></i></button>
                   </form>
               </div>
               <div class="mobile-menu-col mobile-header-border">

                   <!-- Mobile Menu -->
                   <nav>
                       <ul class="main-nav">
                           <li class="mobile-menu-item">
                               <a href="index.html">Type</a>
                           </li>
                           <li class="mobile-menu-item">
                               <a href="#">Beauty</a>
                               <ul class="dropdown">
                                   <li><a href="#">Beauty 1</a></li>
                                   <li><a href="#">Beauty 2</a></li>
                                   <li><a href="#">Beauty 3</a></li>
                                   <li><a href="#">Beauty 4</a></li>
                               </ul>
                           </li>
                           <li class="mobile-menu-item">
                               <a href="#">Books</a>
                               <ul class="dropdown">
                                   <li><a href="#">Books 1</a></li>
                                   <li><a href="#">Books 2</a></li>
                                   <li><a href="#">Books 3</a></li>
                                   <li><a href="#">Books 4</a></li>
                               </ul>
                           </li>
                           <li class="mobile-menu-item">
                               <a href="#">Computers</a>
                               <ul class="dropdown">
                                   <li><a href="#">Computers 1</a></li>
                                   <li><a href="#">Computers 2</a></li>
                                   <li><a href="#">Computers 3</a></li>
                                   <li><a href="#">Computers 4</a></li>
                               </ul>
                           </li>
                           <li class="mobile-menu-item">
                               <a href="#">Shop</a>
                               <ul class="dropdown">
                                   <li><a href="cart.html">Shop - Cart</a></li>
                                   <li><a href="address.html">Shop - Address</a></li>
                                   <li><a href="delivery.html">Shop - Delivery</a></li>
                                   <li><a href="checkout.html">Shop - Checkout</a></li>
                               </ul>
                           </li>
                           <li class="mobile-menu-item">
                               <a href="#">Blog</a>
                               <ul class="dropdown">
                                   <li><a href="blog-list.html">Blog List</a></li>
                                   <li><a href="blog-grid.html">Blog Grid</a></li>
                                   <li><a href="blog-details.html">Blog Details</a></li>
                               </ul>
                           </li>
                           <li class="mobile-menu-item">
                               <a href="#">Mega menu</a>
                               <ul class="dropdown">
                                   <li class="mobile-menu-item">
                                       <a href="#">Women's Fashion</a>
                                       <ul class="dropdown">
                                           <li><a href="product-category-list.html">Dresses</a></li>
                                           <li><a href="product-category-list.html">Blouses & Shirts</a></li>
                                           <li><a href="product-category-list.html">Hoodies & Sweatshirts</a></li>
                                           <li><a href="product-category-list.html">Women's Sets</a></li>
                                       </ul>
                                   </li>
                                   <li class="mobile-menu-item">
                                       <a href="#">Men's Fashion</a>
                                       <ul class="dropdown">
                                           <li><a href="product-category-list.html">Jackets</a></li>
                                           <li><a href="product-category-list.html">Casual Faux Leather</a></li>
                                           <li><a href="product-category-list.html">Genuine Leather</a></li>
                                       </ul>
                                   </li>
                                   <li class="mobile-menu-item">
                                       <a href="#">Technology</a>
                                       <ul class="dropdown">
                                           <li><a href="product-category-list.html">Gaming Laptops</a></li>
                                           <li><a href="product-category-list.html">Ultraslim Laptops</a></li>
                                           <li><a href="product-category-list.html">Tablets</a></li>
                                           <li><a href="product-category-list.html">Laptop Accessories</a></li>
                                           <li><a href="product-category-list.html">Tablet Accessories</a></li>
                                       </ul>
                                   </li>
                               </ul>
                           </li>
                           <li class="mobile-menu-item">
                               <a href="#">Pages</a>
                               <ul class="dropdown">
                                   <li><a href="about-us.html">About Us</a></li>
                                   <li><a href="contact-us.html">Contact Us</a></li>
                                   <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                   <li><a href="terms-conditions.html">Terms of Service</a></li>
                               </ul>
                           </li>
                           <li class="mobile-menu-item">
                               <a href="#">Language</a>
                               <ul class="dropdown">
                                   <li><a href="#">English</a></li>
                                   <li><a href="#">French</a></li>
                                   <li><a href="#">German</a></li>
                                   <li><a href="#">Spanish</a></li>
                               </ul>
                           </li>
                       </ul>
                   </nav>
                   <!-- /Mobile Menu -->

               </div>
           </div>
       </div>
   </div>
   <!-- /Header -->
