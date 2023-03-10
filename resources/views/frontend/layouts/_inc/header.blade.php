<section class="user_menu">
            <small>
                <div class="navbar p-0" style="background-color: #EAE8E7;">
                    <div class="container custom-container">
                        <ul class="nav">
                            <li><a href="" class="nav-link text-muted"><i class="fa-solid fa-address-card me-1"></i> My Account</a></li>
                            <li class="">
                                <div class="dropdown dropdown-small">
                                      <a class="nav-link dropdown-toggle text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-earth-oceania me-1"></i> Language: <span>English</span>
                                      </a>
        
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">English</a></li>
                                        <li><a class="dropdown-item" href="#">Bangla</a></li>
                                        <li><a class="dropdown-item" href="#">German</a></li>
                                      </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav">
                            @if (Auth::check())
                                <li><a href="" class="nav-link text-muted" onclick="event.preventDefault(); document.getElementById('logOutFromFront').submit()"> <i class="fa-solid fa-user-xmark me-1"></i> LogOut</a></li>
                                <form action="{{ route('logout') }}" method="POST" id="logOutFromFront">@csrf</form>
                            @else
                                <li><a href="{{ route('register') }}" class="nav-link text-muted"> <i class="fa-solid fa-user-plus  me-1"></i> Register</a></li>
                                <li><a href="{{ route('login') }}" class="nav-link text-muted"> <i class="fa-solid fa-user me-1"></i> Log In</a></li>
                            @endif
                            
                        </ul>
                    </div>
                </div>
            </small>
    </section>

<header >
    <div id="sticky-header" class="menu__area transparent-header">
        <div class="container custom-container"> 
            <div class="row">
                <div class="col-12">
                    <div class="mobile__nav__toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu__wrap">
                        <nav class="menu__nav">
                            <div class="logo">
                                {{-- <a href="index.html" class="logo__black"><img src="{{ asset('/') }}frontend/assets/img/logo/logo_black.png" alt=""></a> --}}
                                {{-- <a href="index.html" class="logo__white"><img src="{{ asset('/') }}frontend/assets/img/logo/logo_white.png" alt=""></a> --}}
                                <a href="{{ route('front.home') }}" class="text-black fw-bold display-6"><i>Linkon's</i><span class="text-primary">Yard</span></a>
                            </div>

                            <div class="navbar__wrap main__menu d-none d-xl-flex">
                                <ul class="navigation">
                                    <li class=""><a href="{{ route('front.home') }}">Home</a></li>
                                    <li><a href="{{ route('front.about') }}">About</a></li>
                                    <li><a href="services-details.html">Services</a></li>
                                    <li class="menu-item-has-children"><a href="#">Portfolio</a>
                                        <ul class="sub-menu">
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Our Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Our News</a></li>
                                            <li><a href="blog-details.html">News Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('contact') }}">contact me</a></li>
                                    
                                    
                                </ul>
                            </div>
                            <div class="header__btn d-none d-md-block">
                                <a href="{{ route('contact') }}" class="btn">Contact me</a>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile__menu">
                        <nav class="menu__box">
                            <div class="close__btn"><i class="fal fa-times"></i></div>
                            <div class="nav-logo">
                                <a href="{{ route('front.home') }}" class="text-black fw-bold display-6"><i>Linkon's</i><span class="text-primary">Yard</span></a>
                                {{-- <a href="index.html" class="logo__black"><img src="{{ asset('/') }}frontend/assets/img/logo/logo_black.png" alt=""></a> --}}
                                {{-- <a href="index.html" class="logo__white"><img src="{{ asset('/') }}frontend/assets/img/logo/logo_white.png" alt=""></a> --}}
                            </div>
                            <div class="menu__outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                <div class="navbar">
                                        <ul class="navbar-nav">
                                            <li><a href="{{ route('login') }}" class="nav-link text-muted"> <i class="fa-solid fa-user me-1"></i> Log In</a></li>
                                            <li><a href="" class="nav-link text-muted"> <i class="fa-solid fa-user-xmark me-1"></i> LogOut</a></li>
                                            <li><a href="{{ route('register') }}" class="nav-link text-muted"> <i class="fa-solid fa-user-plus  me-1"></i> Register</a></li>
                                        </ul>
                                </div>
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu__backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>