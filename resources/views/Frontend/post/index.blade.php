<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@include('Frontend.Partials._head')
</head>

<body>
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
                                <li><a href="#"><img src="img/social/header/aparat-40.png') }}" /></a></li>
                                <li><a href="#"><img src="img/social/header/instagram-40.png') }}" /></a></li>
                                <li><a href="#"><img src="img/social/header/telegram-40.png') }}" /></a></li>
                                <li><a href="#"><img src="img/social/header/youtube-40.png') }}" /></a></li>
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

    <!-- Start Page Title Area -->
    <section class="page-title-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>اخبار ما</h2>
                </div>
            </div>
        </div>

        <div class="shape1"><img src="{{ asset('Frontend/img/shape1.png') }}" alt="img"></div>
        <div class="shape2"><img src="{{ asset('Frontend/img/shape2.png') }}" alt="img"></div>
        <div class="shape3"><img src="{{ asset('Frontend/img/shape3.png') }}" alt="img"></div>
        <div class="shape6"><img src="{{ asset('Frontend/img/shape6.png') }}" alt="img"></div>
        <div class="shape8 rotateme"><img src="{{ asset('Frontend/img/shape8.svg') }}" alt="shape"></div>
        <div class="shape9"><img src="{{ asset('Frontend/img/shape9.svg') }}" alt="shape"></div>

        <!-- Bubble Animte -->
        <div class="bubble-animate">
            <div class="circle small square1"></div>
            <div class="circle small square2"></div>
            <div class="circle small square3"></div>
            <div class="circle small square4"></div>
            <div class="circle small square5"></div>
            <div class="circle medium square1"></div>
            <div class="circle medium square2"></div>
            <div class="circle medium square3"></div>
            <div class="circle medium square4"></div>
            <div class="circle medium square5"></div>
            <div class="circle large square1"></div>
            <div class="circle large square2"></div>
            <div class="circle large square3"></div>
            <div class="circle large square4"></div>
        </div>
    </section>
    <!-- End Page Title Area -->

    <!-- Start Blog Area -->
    <section class="blog-area blog-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post">
                                <a href="single-blog.html" class="post-image"><img src="{{ asset('Frontend/img/blog-img1.jpg') }}" alt="blog-image"></a>

                                <div class="blog-post-content">
                                    <ul>
                                        <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                        <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                    </ul>
                                    <h3><a href="single-blog.html">قرعه کشی مسابقات محرم و صفر 1442</a></h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                    <a href="single-blog.html" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post">
                                <a href="single-blog.html" class="post-image"><img src="{{ asset('Frontend/img/blog-img2.jpg') }}" alt="blog-image"></a>

                                <div class="blog-post-content">
                                    <ul>
                                        <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                        <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                    </ul>
                                    <h3><a href="single-blog.html">قرعه کشی مسابقات نیمه شعبان 1441</a></h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                    <a href="single-blog.html" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post">
                                <a href="single-blog.html" class="post-image"><img src="{{ asset('Frontend/img/blog-img3.jpg') }}" alt="blog-image"></a>

                                <div class="blog-post-content">
                                    <ul>
                                        <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                        <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                    </ul>
                                    <h3><a href="single-blog.html">قرعه کشی مسابقات بهار 99</a></h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                    <a href="single-blog.html" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post">
                                <a href="single-blog.html" class="post-image"><img src="{{ asset('Frontend/img/blog-img4.jpg') }}" alt="blog-image"></a>

                                <div class="blog-post-content">
                                    <ul>
                                        <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                        <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                    </ul>
                                    <h3><a href="single-blog.html">قرعه کشی مسابقات بهار 99</a></h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                    <a href="single-blog.html" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post">
                                <a href="single-blog.html" class="post-image"><img src="{{ asset('Frontend/img/blog-img4.jpg') }}" alt="blog-image"></a>

                                <div class="blog-post-content">
                                    <ul>
                                        <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                        <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                    </ul>
                                    <h3><a href="single-blog.html">قرعه کشی مسابقات بهار 99</a></h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                    <a href="single-blog.html" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post">
                                <a href="single-blog.html" class="post-image"><img src="{{ asset('Frontend/img/blog-img4.jpg') }}" alt="blog-image"></a>

                                <div class="blog-post-content">
                                    <ul>
                                        <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                        <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                    </ul>
                                    <h3><a href="single-blog.html">قرعه کشی مسابقات بهار 99</a></h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                    <a href="single-blog.html" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post">
                                <a href="single-blog.html" class="post-image"><img src="{{ asset('Frontend/img/blog-img4.jpg') }}" alt="blog-image"></a>

                                <div class="blog-post-content">
                                    <ul>
                                        <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                        <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                    </ul>
                                    <h3><a href="single-blog.html">قرعه کشی مسابقات بهار 99</a></h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                    <a href="single-blog.html" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post">
                                <a href="single-blog.html" class="post-image"><img src="{{ asset('Frontend/img/blog-img4.jpg') }}" alt="blog-image"></a>

                                <div class="blog-post-content">
                                    <ul>
                                        <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                        <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                    </ul>
                                    <h3><a href="single-blog.html">قرعه کشی مسابقات بهار 99</a></h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                    <a href="single-blog.html" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post">
                                <a href="single-blog.html" class="post-image"><img src="{{ asset('Frontend/img/blog-img4.jpg') }}" alt="blog-image"></a>

                                <div class="blog-post-content">
                                    <ul>
                                        <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                        <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                    </ul>
                                    <h3><a href="single-blog.html">قرعه کشی مسابقات بهار 99</a></h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                    <a href="single-blog.html" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog-post">
                                <a href="single-blog.html" class="post-image"><img src="{{ asset('Frontend/img/blog-img4.jpg') }}" alt="blog-image"></a>

                                <div class="blog-post-content">
                                    <ul>
                                        <li><i class="icofont-user-male"></i> <a href="#">ادمین</a></li>
                                        <li><i class="icofont-wall-clock"></i> اسفند 1397</li>
                                    </ul>
                                    <h3><a href="single-blog.html">قرعه کشی مسابقات بهار 99</a></h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                    <a href="single-blog.html" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="pagination-area">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">

                                        <li class="page-item"><a class="page-link" href="#"><i class="icofont-double-left"></i></a></li>

                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>

                                        <li class="page-item"><a class="page-link" href="#">2</a></li>

                                        <li class="page-item"><a class="page-link" href="#">3</a></li>

                                        <li class="page-item"><a class="page-link" href="#"><i class="icofont-double-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-area">
                        <div class="widget widget-search">
                            <form>
                                <input type="text" class="form-control" placeholder="جستجو">
                                <button type="submit"><i class="icofont-search-2"></i></button>
                            </form>
                        </div>

                        <div class="widget widget_product_categories">
                            <h3 class="widget-title">دسته بندی محصولات</h3>
                            <div class="bar"></div>

                            <ul>
                                <li><a href="#"><i class="icofont-bubble-right"></i> نیمه شعبان</a></li>
                                <li><a href="#"><i class="icofont-bubble-right"></i>فاطمیه </a></li>
                                <li><a href="#"><i class="icofont-bubble-right"></i> عید غدیر</a></li>
                                <li><a href="#"><i class="icofont-bubble-right"></i> امام باقر علیه السلام</a></li>
                                <li><a href="#"><i class="icofont-bubble-right"></i> امام علی علیه السلام</a></li>
                                <li><a href="#"><i class="icofont-bubble-right"></i> محرم و صفر</a></li>
                                <li><a href="#"><i class="icofont-bubble-right"></i> امام موسی کاظم علیه السلام </a></li>
                                <li><a href="#"><i class="icofont-bubble-right"></i> امامت </a></li>
                                <li><a href="#"><i class="icofont-bubble-right"></i> اخلاق امور تربیتی </a></li>
                                <li><a href="#"><i class="icofont-bubble-right"></i> امام جواد علیه السلام </a></li>
                                <li><a href="#"><i class="icofont-bubble-right"></i> شب های قدر </a></li>
                                <li><a href="#"><i class="icofont-bubble-right"></i> ماه مبارک رمضان </a></li>
                                <li><a href="#"><i class="icofont-bubble-right"></i> امام هادی علیه السلام</a></li>
                                <li><a href="#"><i class="icofont-bubble-right"></i> امام حسین علیه السلام </a></li>
                                <li><a href="#"><i class="icofont-bubble-right"></i> امام صادق علیه السلام </a></li>
                                <li><a href="#"><i class="icofont-bubble-right"></i> پیامبر اکرم صلی الله علیه و آله </a></li>
                                <li><a href="#"><i class="icofont-bubble-right"></i> امام رضا علیه السلام</a></li>
                            </ul>
                        </div>

                        <div class="widget widget_recent_products">
                            <h3 class="widget-title">پست های اخیر</h3>
                            <div class="bar"></div>

                            <ul>
                                <li>
                                    <div class="recent-products-thumb">
                                        <a href="#">
                                            <img src="{{ asset('Frontend/img/shop-item1.jpg') }}" alt="blog-image">
                                        </a>
                                    </div>

                                    <div class="recent-products-content">
                                        <h3><a href="#">بانوی من زهرا</a></h3>
                                        <ul>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                        </ul>
                                        <span class="date">تومان 18.00</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="recent-products-thumb">
                                        <a href="#">
                                            <img src="{{ asset('Frontend/img/shop-item2.jpg') }}" alt="blog-image">
                                        </a>
                                    </div>

                                    <div class="recent-products-content">
                                        <h3><a href="#">بانوی من زهرا</a></h3>
                                        <ul>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                        </ul>
                                        <span class="date">تومان 18.00</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="recent-products-thumb">
                                        <a href="#">
                                            <img src="{{ asset('Frontend/img/shop-item3.jpg') }}" alt="blog-image">
                                        </a>
                                    </div>

                                    <div class="recent-products-content">
                                        <h3><a href="#">بانوی من زهرا</a></h3>
                                        <ul>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                        </ul>
                                        <span class="date">تومان 18.00</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="recent-products-thumb">
                                        <a href="#">
                                            <img src="{{ asset('Frontend/img/shop-item4.jpg') }}" alt="blog-image">
                                        </a>
                                    </div>

                                    <div class="recent-products-content">
                                        <h3><a href="#">بانوی من زهرا</a></h3>
                                        <ul>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                        </ul>
                                        <span class="date">تومان 18.00</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget_tag_cloud">
                            <h3 class="widget-title">جدیدترین کتاب</h3>
                            <div class="bar"></div>

                            <div class="tagcloud">
                                <a href="#">بانوی من زهرا</a>
                                <a href="#">کتاب غدیرخم</a>
                                <a href="#">روزشمار فاطمیه</a>
                                <a href="#">کوثر معجزه پیغمبر</a>
                                <a href="#">کشتی پهلو گرفته</a>
                                <a href="#">تا ابد اندوه</a>
                                <a href="#">فاطمه زهرا سلام الله علیها بانوی بهشت</a>
                            </div>
                        </div>
                        <div class="widget widget_tag_cloud">
                            <h3 class="widget-title">ترین های کتاب</h3>
                            <div class="bar"></div>

                            <div class="tagcloud">
                                <a href="#">بانوی من زهرا</a>
                                <a href="#">کتاب غدیرخم</a>
                                <a href="#">روزشمار فاطمیه</a>
                                <a href="#">کوثر معجزه پیغمبر</a>
                                <a href="#">کشتی پهلو گرفته</a>
                                <a href="#">تا ابد اندوه</a>
                                <a href="#">فاطمه زهرا سلام الله علیها بانوی بهشت</a>
                            </div>
                        </div>
                        <div class="widget widget_tag_cloud">
                            <h3 class="widget-title">ترین های کاربران</h3>
                            <div class="bar"></div>

                            <div class="tagcloud">
                                <a href="#">بانوی من زهرا</a>
                                <a href="#">کتاب غدیرخم</a>
                                <a href="#">روزشمار فاطمیه</a>
                                <a href="#">کوثر معجزه پیغمبر</a>
                                <a href="#">کشتی پهلو گرفته</a>
                                <a href="#">تا ابد اندوه</a>
                                <a href="#">فاطمه زهرا سلام الله علیها بانوی بهشت</a>
                            </div>
                        </div>
                        <div class="widget widget_tag_cloud">
                            <h3 class="widget-title">جدیدترین اخبار</h3>
                            <div class="bar"></div>

                            <div class="tagcloud">
                                <a href="#">بانوی من زهرا</a>
                                <a href="#">کتاب غدیرخم</a>
                                <a href="#">روزشمار فاطمیه</a>
                                <a href="#">کوثر معجزه پیغمبر</a>
                                <a href="#">کشتی پهلو گرفته</a>
                                <a href="#">تا ابد اندوه</a>
                                <a href="#">فاطمه زهرا سلام الله علیها بانوی بهشت</a>
                            </div>
                        </div>

                        <div class="widget widget_text">
                            <h3 class="widget-title">تبلیغات</h3>
                            <div class="bar"></div>

                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('Frontend/img/work-img1.jpg') }}" alt="image">
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="{{ asset('Frontend/img/work-img2.jpg') }}" alt="image">
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="{{ asset('Frontend/img/work-img3.jpg') }}" alt="image">
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="{{ asset('Frontend/img/work-img4.jpg') }}" alt="image">
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="{{ asset('Frontend/img/work-img5.jpg') }}" alt="image">
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="{{ asset('Frontend/img/work-img6.jpg') }}" alt="image">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <!-- Start Footer Area -->
    <footer class="footer-area ptb-100 pb-0 bg-image">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <a href="#" class="logo">
                            <img src="{{asset('Frontend/assets/img/logo/logo_foot.png') }}" alt="logo2">
                        </a>
                        <p>با شرکت در مسابقات کتابخوانی امتیاز کسب کنید و برنده جوایز نفیس ما شوید.</p>

                        <ul class="social-list">
                            <li><a href="#"><img src="{{asset('Frontend/assets/img/social/footer/aparat-32.png') }}" /></a></li>
                            <li><a href="#"><img src="{{asset('Frontend/assets/img/social/footer/instagram-32.png') }}" /></a></li>
                            <li><a href="#"><img src="{{asset('Frontend/assets/img/social/footer/telegram-32.png') }}" /></a></li>
                            <li><a href="#"><img src="{{asset('Frontend/assets/img/social/footer/youtube-32.png') }}" /></a></li>

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
                            <li><a href="Supporters.html">حمایت کنندگان</a></li>
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

  @include('Frontend.Partials._footer')
</body>

</html>