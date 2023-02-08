 <!-- ***** Header Area Start ***** -->
 <header class="header-area header-sticky">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <nav class="main-nav">
                     <!-- ***** Logo Start ***** -->
                     <a href="index.html" class="logo">Omega<em> Motors</em></a>
                     <!-- ***** Logo End ***** -->
                     <!-- ***** Menu Start ***** -->
                     <ul class="nav">
                         <li><a href="index.html" class="active">Home</a></li>
                         <li><a href="cars.html">Cars</a></li>
                         <li class="dropdown">
                             <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                 aria-haspopup="true" aria-expanded="false">About</a>

                             <div class="dropdown-menu">
                                 <a class="dropdown-item" href="about.html">About Us</a>
                                 <a class="dropdown-item" href="blog.html">Blog</a>
                                 <a class="dropdown-item" href="team.html">Team</a>
                                 <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                                 <a class="dropdown-item" href="faq.html">FAQ</a>
                                 <a class="dropdown-item" href="terms.html">Terms</a>
                             </div>
                         </li>
                         {{-- @if (Route::has('login'))
                             @auth
                                 <li> <a href="{{ url('/dashboard') }}"
                                         class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                 </li>
                             @else
                                 <li> <a href="{{ route('login') }}" class="">Login</a></li>

                                 @if (Route::has('register'))
                                     <li><a href="{{ route('register') }}" class="">Register</a>
                                     </li>
                                 @endif
                             @endauth
                         @endif --}}

                         <li class="dropdown">
                             <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                 aria-haspopup="true" aria-expanded="false">Account</a>

                             <div class="dropdown-menu">
                                 @if (Auth::check())
                                     <a class="dropdown-item" href=" {{ route('user.dashboard') }} ">My Dashboard</a>
                                     <a class="dropdown-item" href=" {{ route('new.login') }} ">Logout</a>
                                     <a class="dropdown-item" href=" {{ route('new.login') }} ">Login</a>
                                 @endif
                             </div>
                         </li>

                     </ul>
                     <a class='menu-trigger'>
                         <span>Menu</span>
                     </a>
                     <!-- ***** Menu End ***** -->
                 </nav>
             </div>
         </div>
     </div>
 </header>
 <!-- ***** Header Area End ***** -->
