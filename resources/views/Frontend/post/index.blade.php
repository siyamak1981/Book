@extends('Frontend.public.app')

@section('main-content')

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
                <h2>نوشته ها</h2>
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
                    @foreach($posts as $post)
                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog-post">
                            <a href="single-blog.html" class="post-image"><img src="{{Storage::disk('local')->url('posts/'.$post->image)}}" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">{{$post->posted_by}}</a></li>
                                    <li><i class="icofont-wall-clock"></i></li><small>{{$post->created_at}}</small>
                                </ul>
                                <h3><a href="single-blog.html">{{$post->title}}</a></h3>
                                <p>{!! htmlspecialchars_decode($post->body) !!}</p>
                                <a href="{{ route('post', $post->slug) }}" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

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
                            @foreach($posts as $post)
                            @foreach($post->categories->unique('name') as $category)
                            <a href="{{route('post.category', $category->slug)}}">{{$category->name}}</a>
                            <br>
                            @endforeach
                            @endforeach
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
@endsection