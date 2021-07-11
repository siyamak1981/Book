<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <!-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> -->
        @include('Frontend.Partials._head')
    </head>
    <body>
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

          
        </div> -->
            <!-- Start Preloader Area -->
    <div class="preloader-area">
        <div class="lds-hourglass"></div>
    </div>
    <!-- End Preloader Area -->
    <!-- Start Navbar Area -->
    <header id="header">
        <div class="crake-mobile-nav">
            <div class="logo">
                <img src="{{ asset('Frontend/img/logo.png') }}" alt="">
            </div>
        </div>

        <div class="crake-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index-6.html"><img src="{{ asset('Frontend/img/logo/logo-head.png') }}" alt="logo"></a>

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

                        <h2 class="modal-title" id="myModalLabel2"><a href="index.html"><img src="{{ asset('Frontend/img/logo.png') }}" alt="logo"></a></h2>
                    </div>

                    <div class="modal-body">
                        <div class="sidebar-modal-widget">
                            <h3 class="title">لینک های اضافی</h3>

                            <ul>
                                <li><a href="index.html">صفحه اصلی</a></li>
                                <li><a href="login.html">ورود</a></li>
                                <li><a href="signup.html">ثبت نام</a></li>
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
                                <li><a href="#"><img src="{{ asset('Frontend/img/social/header/aparat-40.png') }}" /></a></li>
                                <li><a href="#"><img src="{{ asset('Frontend/img/social/header/instagram-40.png') }}" /></a></li>
                                <li><a href="#"><img src="{{ asset('Frontend/img/social/header/telegram-40.png') }}" /></a></li>
                                <li><a href="#"><img src="{{ asset('Frontend/img/social/header/youtube-40.png') }}" /></a></li>
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
    <!-- Start Startup Main Banner -->
    <div class="home-slides startup-home">
        <div class="main-banner startup-bg1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="hero-content">
                                    <h1>در مسابقات شرکت کنید و امتیاز کسب کنید</h1>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>

                                    <a href="#" class="btn btn-primary">هم اکنون شروع کنید</a>
                                    <a href="#" class="video-btn popup-youtube"> تماشای ویدیو <i class="icofont-play-alt-3"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <img src="{{ asset('Frontend/img/home/10.png') }}" />

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray shape-1"></div>
            <div class="shape1"><img src="{{ asset('Frontend/img/shape1.png') }}" alt="img"></div>
            <div class="shape2"><img src="{{ asset('Frontend/img/shape2.png') }}" alt="img"></div>
            <div class="shape3"><img src="{{ asset('Frontend/img/shape3.png') }}" alt="img"></div>
            <div class="shape6"><img src="{{ asset('Frontend/img/shape6.png') }}" alt="img"></div>
            <div class="shape8 rotateme"><img src="{{ asset('Frontend/img/shape8.svg') }}" alt="shape"></div>
            <div class="shape9"><img src="{{ asset('Frontend/img/shape9.svg') }}" alt="shape"></div>
        </div>

        <div class="main-banner startup-bg2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="hero-content">
                                    <h1>در مسابقات شرکت کنید و امتیاز کسب کنید</h1>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>

                                    <a href="#" class="btn btn-primary">هم اکنون شروع کنید</a>
                                    <a href="#" class="video-btn popup-youtube"> تماشای ویدیو <i class="icofont-play-alt-3"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <img src="{{ asset('Frontend/img/home/10.png') }}" />

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray shape-1"></div>
            <div class="shape1"><img src="{{ asset('Frontend/img/shape1.png') }}" alt="img"></div>
            <div class="shape2"><img src="{{ asset('Frontend/img/shape2.png') }}" alt="img"></div>
            <div class="shape3"><img src="{{ asset('Frontend/img/shape3.png') }}" alt="img"></div>
            <div class="shape6"><img src="{{ asset('Frontend/img/shape6.png') }}" alt="img"></div>
            <div class="shape8 rotateme"><img src="{{ asset('Frontend/img/shape8.svg') }}" alt="shape"></div>
            <div class="shape9"><img src="{{ asset('Frontend/img/shape9.svg') }}" alt="shape"></div>
        </div>

        <div class="main-banner startup-bg3">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="hero-content">
                                    <h1>در مسابقات شرکت کنید و امتیاز کسب کنید</h1>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>

                                    <a href="#" class="btn btn-primary">هم اکنون شروع کنید</a>
                                    <a href="#" class="video-btn popup-youtube"> تماشای ویدیو <i class="icofont-play-alt-3"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <img src="{{ asset('Frontend/img/home/10.png') }}" />

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray shape-1"></div>
            <div class="shape1"><img src="{{ asset('Frontend/img/shape1.png') }}" alt="img"></div>
            <div class="shape2"><img src="{{ asset('Frontend/img/shape2.png') }}" alt="img"></div>
            <div class="shape3"><img src="{{ asset('Frontend/img/shape3.png') }}" alt="img"></div>
            <div class="shape6"><img src="{{ asset('Frontend/img/shape6.png') }}" alt="img"></div>
            <div class="shape8 rotateme"><img src="{{ asset('Frontend/img/shape8.svg') }}" alt="shape"></div>
            <div class="shape9"><img src="{{ asset('Frontend/img/shape9.svg') }}" alt="shape"></div>
        </div>
    </div>
    <!-- End Startup Main Banner -->
    <!-- Start Partner Area -->
    <div class="partner-area app-partner">
        <div class="container">
            <div class="row">
                <div class="partner-slides">
                    <div class="col-lg-12">
                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('Frontend/img/Competition books/banooy-beheshtgif') }}" />
                            </a>

                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('Frontend/img/Competition books/image-yas-dar-atashgif') }}" />
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('Frontend/img/Competition books/jeld-banoye-man-zahra1431.jpg') }}" />
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('Frontend/img/Competition books/jeld-hamrah-jamadigif') }}" />
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('Frontend/img/Competition books/jeld-jala-o-oyoongif') }}" />
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('Frontend/img/Competition books/jeld-nedaye-fatemi.jpg') }}" />
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('Frontend/img/Competition books/jeld-rehlatgif') }}" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('Frontend/img/Competition books/jeld-soog-hosein.jpg') }}" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('Frontend/img/Competition books/jeld-ta-abad-andoh1431.jpg') }}" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('Frontend/img/Competition books/keshti_p2.jpg') }}" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('Frontend/img/Competition books/Picturebv-004gif') }}" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('Frontend/img/Competition books/roozshomargif') }}" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->
    <!-- Start Features Area -->
    <section class="partner-area app-partner ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-features-box">
                        <div class="icon">
                            <i class="icofont-users-social"></i>
                        </div>
                        <h3>ثبت نام</h3>
                        <p>
                            ثبت نام و شركت در مسابقه كتابخواني
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-features-box">
                        <div class="icon">
                            <i class="icofont-book-alt"></i>
                        </div>
                        <h3>دریافت منابع</h3>
                        <p>
                            دریافت منابع و کتب مورد نیاز برای شرکت در مسابقه
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-features-box">
                        <div class="icon">
                            <i class="icofont-win-trophy"></i>
                        </div>
                        <h3>شرکت در مسابقات</h3>
                        <p>
                            شما می توانید با شرکت در مسابقات امتیاز کسب کنید و برنده جایزه شوید
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="shape7"><img src="{{ asset('Frontend/img/shape7.png') }}" alt="shape"></div>
        <div class="shape3"><img src="{{ asset('Frontend/img/shape3.png') }}" alt="img"></div>
        <div class="bg-gray shape-1"></div>
        <div class="shape6"><img src="{{ asset('Frontend/img/shape6.png') }}" alt="img"></div>
        <div class="shape8 rotateme"><img src="{{ asset('Frontend/img/shape8.svg') }}" alt="shape"></div>
        <div class="shape9"><img src="{{ asset('Frontend/img/shape9.svg') }}" alt="shape"></div>
        <div class="shape10"><img src="{{ asset('Frontend/img/shape10.svg') }}" alt="shape"></div>
        <div class="shape11 rotateme"><img src="{{ asset('Frontend/img/shape11.svg') }}" alt="shape"></div>
    </section>
    <!-- End Features Area -->
    <!-- Start Overview Area -->
    <section class="overview-section ptb-100 bg-gray">
        <div class="container">

            <div class="overview-box">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6 overview-img">
                        <img src="{{ asset('Frontend/img/home/2.png') }}" alt="image">
                    </div>

                    <div class="col-lg-6 col-md-6 overview-content">
                        <div class="icon">
                            <i class="icofont-power"></i>
                        </div>
                        <h3>مسابقات کتابخوانی</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>

                        <ul>
                            <li>دریافت منابع از سایت</li>
                            <li>کسب امتیاز از سایت</li>
                            <li>دریافت جوایز نفیس</li>
                        </ul>
                        <a href="Competitions.html" class="btn btn-primary">ادامه مطلب</a>
                    </div>
                </div>
            </div>

            <div class="overview-box">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6 overview-content">
                        <div class="icon">
                            <i class="icofont-anchor"></i>
                        </div>
                        <h3>جشنواره سایت</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>

                        <ul>
                            <li>جشنواره دوره ای برای کسب امتیاز</li>
                            <li>ویژگی دوم </li>
                            <li>ویژگی سوم</li>
                        </ul>
                        <a href="#" class="btn btn-primary">ادامه مطلب</a>
                    </div>

                    <div class="col-lg-6 col-md-6 overview-img">
                        <img src="{{ asset('Frontend/img/home/5.jpg') }}" alt="image">
                    </div>
                </div>
            </div>

            <div class="overview-box">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6 overview-img">
                        <img src="{{ asset('Frontend/img/home/10.png') }}" alt="image">
                    </div>

                    <div class="col-lg-6 col-md-6 overview-content">
                        <div class="icon">
                            <i class="icofont-book-alt"></i>
                        </div>
                        <h3>کتاب جهانگرد</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>

                        <ul>
                            <li>ویژگی اول</li>
                            <li>ویژگی دوم</li>
                            <li>ویژگی سوم</li>
                        </ul>
                        <a href="tourist-book.html" class="btn btn-primary">ادامه مطلب</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape7"><img src="{{ asset('Frontend/img/shape7.png') }}" alt="shape"></div>
        <div class="shape3"><img src="{{ asset('Frontend/img/shape3.png') }}" alt="img"></div>
        <div class="bg-gray shape-1"></div>
        <div class="shape6"><img src="{{ asset('Frontend/img/shape6.png') }}" alt="img"></div>
        <div class="shape8 rotateme"><img src="{{ asset('Frontend/img/shape8.svg') }}" alt="shape"></div>
        <div class="shape9"><img src="{{ asset('Frontend/img/shape9.svg') }}" alt="shape"></div>
        <div class="shape10"><img src="{{ asset('Frontend/img/shape10.svg') }}" alt="shape"></div>
        <div class="shape11 rotateme"><img src="{{ asset('Frontend/img/shape11.svg') }}" alt="shape"></div>
    </section>
    <!-- End Overview Area -->
    <!-- Start App Funfacts Area -->
    <section class="app-funfacts-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="single-funfact">
                        <div class="icon">
                            <i class="icofont-book-alt"></i>
                        </div>
                        <h3><span class="count">5</span>میلیون</h3>
                        <p>کتاب های موجود</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3">
                    <div class="single-funfact">
                        <div class="icon">
                            <i class="icofont-coffee-alt"></i>
                        </div>
                        <h3><span class="count">1.5</span>میلیون</h3>
                        <p>جایزه</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3">
                    <div class="single-funfact">
                        <div class="icon">
                            <i class="icofont-book-mark"></i>
                        </div>
                        <h3><span class="count">1</span>میلیون</h3>
                        <p>کپی های منتشر شده</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3">
                    <div class="single-funfact">
                        <div class="icon">
                            <i class="icofont-ui-user"></i>
                        </div>
                        <h3><span class="count">50</span>هزار</h3>
                        <p>کاربران ما</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End App Funfacts Area -->
    <!-- Start Feedback Area -->
    <section class="feedback-area ptb-100 bg-gray">
        <div class="container">
            <div class="section-title">
                <h2>ترین های کتاب</h2>
                <div class="bar"></div>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
            </div>

            <div class="row">
                <div class="blog-slides">
                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <a href="most.html" class="post-image"><img src="{{ asset('Frontend/img/blog-img1.jpg') }}" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                    <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                </ul>
                                <h3><a href="most.html">کشتی پهلو گرفته</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                <a href="most.html" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <a href="most.html" class="post-image"><img src="{{ asset('Frontend/img/blog-img2.jpg') }}" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                    <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                </ul>
                                <h3><a href="most.html">ندای فاطمی</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                <a href="most.html" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <a href="most.html" class="post-image"><img src="{{ asset('Frontend/img/blog-img3.jpg') }}" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                    <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                </ul>
                                <h3><a href="most.html">پیامبر خدا صلی الله علیه و آله در سوگ حسین علیه السلام</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                <a href="most.html" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <a href="most.html" class="post-image"><img src="{{ asset('Frontend/img/blog-img4.jpg') }}" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                    <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                </ul>
                                <h3><a href="most.html">پیامبر خدا صلی الله علیه و آله در سوگ حسین علیه السلام</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                <a href="most.html" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <a href="most.html" class="post-image"><img src="{{ asset('Frontend/img/blog-img4.jpg') }}" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                    <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                </ul>
                                <h3><a href="most.html">پیامبر خدا صلی الله علیه و آله در سوگ حسین علیه السلام</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                <a href="most.html" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <a href="most.html" class="post-image"><img src="{{ asset('Frontend/img/blog-img4.jpg') }}" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                    <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                </ul>
                                <h3><a href="most.html">پیامبر خدا صلی الله علیه و آله در سوگ حسین علیه السلام</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                <a href="most.html" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <svg class="svg-feedback-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0,70 C30,130 70,50 100,70 L100,100 0,100 Z" fill="#ffffff" />
        </svg>
    </section>
    <!-- End Feedback Area -->
    <!-- Start Blog Area -->
    <section class="blog-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>ترین های کاربران</h2>
                <div class="bar"></div>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
            </div>

            <div class="row">
                <div class="blog-slides">
                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <a href="#" class="post-image"><img src="{{ asset('Frontend/img/blog-img1.jpg') }}" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                    <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                </ul>
                                <h3><a href="#">کشتی پهلو گرفته</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                <a href="#" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <a href="#" class="post-image"><img src="{{ asset('Frontend/img/blog-img2.jpg') }}" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                    <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                </ul>
                                <h3><a href="#">ندای فاطمی</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                <a href="#" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <a href="#" class="post-image"><img src="{{ asset('Frontend/img/blog-img3.jpg') }}" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                    <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                </ul>
                                <h3><a href="#">پیامبر خدا صلی الله علیه و آله در سوگ حسین علیه السلام</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                <a href="#" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <a href="#" class="post-image"><img src="{{ asset('Frontend/img/blog-img4.jpg') }}" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                    <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                </ul>
                                <h3><a href="#">پیامبر خدا صلی الله علیه و آله در سوگ حسین علیه السلام</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                <a href="#" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <a href="#" class="post-image"><img src="{{ asset('Frontend/img/blog-img5.jpg') }}" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                    <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                </ul>
                                <h3><a href="#">محبوب ترین برنامه های جدید در سال 2019</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                <a href="#" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <a href="#" class="post-image"><img src="{{ asset('Frontend/img/blog-img3.jpg') }}" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                    <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                </ul>
                                <h3><a href="#">سریع ترین برنامه های در حال رشد در سال 2019</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                                <a href="#" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
    <!-- Start Subscribe Area -->
 @include('Frontend.Partials._newslater')
    <!-- End Subscribe Area -->
    <!-- Start Partner Area -->
    <div class="partner-area app-partner">
        <div class="container">
            <div class="section-title">
                <h2>حمایت کنندگان ما</h2>
                <div class="bar"></div>
                
            </div>
            <div class="row">
                <div class="partner-slides">
                    <div class="col-lg-12">
                        <div class="item">
                            <a href="#">
                                <img src="{{ asset('Frontend/img/Competition books/banooy-beheshtgif') }}" />
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->
    <!-- Start Footer Area -->
    <footer class="footer-area ptb-100 pb-0 bg-image">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <a href="#" class="logo">
                            <img src="{{ asset('Frontend/img/logo/logo_foot.png') }}" alt="logo2">
                        </a>
                        <p>با شرکت در مسابقات کتابخوانی امتیاز کسب کنید و برنده جوایز نفیس ما شوید.</p>

                        <ul class="social-list">
                            <li><a href="#"><img src="{{ asset('Frontend/img/social/footer/aparat-32.png') }}" /></a></li>
                            <li><a href="#"><img src="{{ asset('Frontend/img/social/footer/instagram-32.png') }}" /></a></li>
                            <li><a href="#"><img src="{{ asset('Frontend/img/social/footer/telegram-32.png') }}" /></a></li>
                            <li><a href="#"><img src="{{ asset('Frontend/img/social/footer/youtube-32.png') }}" /></a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget pl-5">
                        <h3>صفحات</h3>

                        <ul class="list">
                            <li><a href="about.html">درباره</a></li>
                            <li><a href="contact-us.html">تماس با ما</a></li>
                            <li><a href="Work-us.html">همکاری با ما</a></li>
                            <li><a href="#">حمایت کنندگان</a></li>
                            <li><a href="fag.html">سوالات متداول</a></li>
                            <li><a href="tourist-book.html">کتاب جهانگرد</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>مسابقات</h3>

                        <ul class="list">
                            <li><a href="search-Advanced.html">جستجویی پیشرفته</a></li>
                            <li><a href="Competitions.html">مسابقه</a></li>
                            <li><a href="blog.html">اخبار</a></li>
                            <li><a href="Contest-winners.html">برندگان</a></li>
                            <li><a href="singnup.html">ثبت نام</a></li>
                            <li><a href="login.html">ورود</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>ترین های کتاب</h3>

                        <ul class="list">
                            <li><a href="most.html">تازه ترین</a></li>
                            <li><a href="most.html">محبوب ترین</a></li>
                            <li><a href="most.html">جدیدترین</a></li>
                            <li><a href="most.html">پربازدیدترین</a></li>
                            <li><a href="most.html">برگزیده ترین</a></li>
                            <li><a href="most.html">بهترین</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-area">
            <div class="container">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <p>تمامی حقوق سایت متعلق به سایت مسابقات کتابخوانی می باشد.@2020</p>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <ul>
                            <li><a href="mailto:mohsenkishani69@gmail.com" target="_top">ایمیل پشتیبانی</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->
    <!-- Back Top top -->
    <div class="back-to-top">بالا</div>
    <!-- End Back Top top -->
    <!-- Jquery Min JS -->
    @include('Frontend.Partials._footer')
    </body>
</html>
