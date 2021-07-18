<!-- Start Preloader Area -->
<div class="preloader-area">
    <div class="lds-hourglass"></div>
</div>
<!-- End Preloader Area -->

<!-- Start Navbar Area -->
<header id="header">
    <div class="crake-mobile-nav">
        <div class="logo">
            <img src="{{ asset('Frontend/assets/img/logo.png') }}" alt="">
        </div>
    </div>

    <div class="crake-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index-6.html"><img src="{{asset('Frontend/assets/img/logo/logo-head.png') }}" alt="logo"></a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav ml-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">صفحه اصلی</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">مسابقات</a>
                            <ul class="dropdown_menu">
                                <li><a href="Competitions.html">مسابقات در حال برگذاری</a></li>
                                <li><a href="#">مسابقات برگذار شده</a></li>
                                <li><a href="#">برندگان مسابقات</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="Shiite-child.html" class="nav-link">جشنواره من بچه شیعه هستم</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">کتابخانه</a>
                            <ul class="dropdown_menu">
                                <li><a href="Category-1.html">موضوعات</a></li>
                                <li><a href="search-Advanced.html">جستجو پیشرفته</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">صفحات</a>
                            <ul class="dropdown_menu">
                                <li><a href="about.html">درباره ما</a></li>
                                <li><a href="blog.html">اخبار</a></li>
                                <li><a href="cart.html">سبد خرید</a></li>
                                <li><a href="Category-1.html">دسته بندی یک</a></li>
                                <li><a href="Category-2.html">دسته بندی دو</a></li>
                                <li><a href="Category-3.html">دسته بندی سه</a></li>
                                <li><a href="checkout.html">بررسی</a></li>
                                <li><a href="contact-us.html">تماس با ما</a></li>
                                <li><a href="fag.html">سوالات متداول</a></li>
                                <li><a href="signip.html">ثبت نام</a></li>
                                <li><a href="login.html">ورود</a></li>
                                <li><a href="work-us.html">همکاری با ما</a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">صفحات دو</a>
                            <ul class="dropdown_menu">
                                <li><a href="single-book.html">جزئیات کتاب</a></li>
                                <li><a href="single-blog.html">جزئیات اخبار</a></li>
                                <li><a href="tourist-book.html">کتاب جهانگرد</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="mr-auto others-option">
                    <ul class="navbar-nav">
                        <li class="nav-item cart-wrapper">
                            <a href="#">
                                <i class="icofont-shopping-cart cart-icon"></i>

                                <span>0</span>
                            </a>
                        </li>
                        <li class="header-search-box">
                            <a href="#header-search" title="Search">
                                <i class="icofont-search-2"></i>
                            </a>
                        </li>
                        <li data-toggle="modal" data-target="#myModal2">
                            <div class="side-menu">
                                <span class="bar-1"></span>
                                <span class="bar-2"></span>
                                <span class="bar-3"></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- End Navbar Area -->
<!-- Start Sidebar Modal -->
<div class="sidebar-modal">
    <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="icofont-close"></i></span></button>

                    <h2 class="modal-title" id="myModalLabel2"><a href="index.html"><img src="{{ asset('Frontend/assets/img/logo.png') }}" alt="logo"></a></h2>
                </div>

                <div class="modal-body">
                    <div class="sidebar-modal-widget">
                        <h3 class="title">لینک های اضافی</h3>

                        <ul>
                            <li><a href="index.html">صفحه اصلی</a></li>
                            <li> @if (Route::has('login'))

                                @auth
                                <a href="{{ url('/') }}">خانه</a>
                                <br>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    خروج
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                @else
                                <a href="{{ route('login') }}">ورود</a>
                                <br>
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}">ثبت نام</a>
                                @endif
                                @endauth

                                @endif
                            </li>
                            <!-- <li><a href="signup.html">ثبت نام</a></li> -->

                            <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

 
  
    <!-- Start Startup Main Banner -->

                            <li><a href="fag.html">سوالات متداول</a></li>
                        </ul>
                    </div>

                    <div class="sidebar-modal-widget">
                        <h3 class="title">اطلاعات تماس</h3>

                        <ul class="contact-info">
                            <li>
                                <i class="icofont-google-map"></i>
                                آدرس
                                <span>تهران/ ساختمان علارور</span>
                            </li>
                            <li>
                                <i class="icofont-email"></i>
                                ایمیل
                                <span>admin@php-code.ir.com</span>
                            </li>
                            <li>
                                <i class="icofont-phone"></i>
                                تلفن
                                <span>0918-8603016</span>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-modal-widget">
                        <h3 class="title">ارتباط با ما</h3>

                        <ul class="social-list">
                            <li><a href="#"><img src="{{ asset('Frontend/assets/img/social/header/aparat-40.png') }}" /></a></li>
                            <li><a href="#"><img src="{{ asset('Frontend/assets/img/social/header/instagram-40.png') }}" /></a></li>
                            <li><a href="#"><img src="{{ asset('Frontend/assets/img/social/header/telegram-40.png') }}" /></a></li>
                            <li><a href="#"><img src="{{ asset('Frontend/assets/img/social/header/youtube-40.png') }}" /></a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->
</div>
<!-- End Sidebar Modal -->

<!-- Start Search Box -->
<div id="header-search" class="header-search">
    <button type="button" class="close">×</button>
    <form class="header-search-form">
        <input type="search" value="" placeholder="همینجا تایپ کنید........" />
        <button type="submit" class="btn btn-primary">جستجو</button>
    </form>
</div>
<!-- End Search Box -->