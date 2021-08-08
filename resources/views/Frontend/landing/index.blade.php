@extends('Frontend.public.app')

@section('main-content')
@php
$products =App\Models\Product::where('status', 1)->orderBy('created_at', 'DESC')->paginate(4);
@endphp

   @include('Frontend.Partials._slider')
    <!-- End Startup Main Banner -->
    <!-- Start Partner Area -->
    <div class="partner-area app-partner">
        <div class="container">
            <div class="row">
                <div class="partner-slides">
                    @foreach($products as $product)                 
                    <div class="col-lg-12">
                        <div class="item">
                            <a href="#">
                                <img src="{{URL::to($product->image_one)}}" />
                            </a>
                        </div>
                    </div>
                    @endforeach
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


       

           @include('Frontend.Partials._competition')
           @include('Frontend.Partials._festival')
           @include('Frontend.Partials._torist_book')
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
@foreach($posts as $post)
    <section class="feedback-area ptb-100 bg-gray">
        <div class="container">
            <div class="section-title">
                <h2>ترین های کتاب</h2>
                <div class="bar"></div>
                <p>{{$post->title}}</p>
            </div>

            <div class="row">
                <div class="blog-slides">
                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-post">
                            <a href="{{ route('post', $post->slug) }}" class="post-image"><img src="{{Storage::disk('local')->url('posts/'.$post->image)}}" alt="blog-image"></a>

                            <div class="blog-post-content">
                                <ul>
                                    <li><i class="icofont-user-male"></i> <a href="#">{{$post->posted_by}}</a></li>
                                    <li><i class="icofont-wall-clock"></i>   </li>     
                                      <td>{{ \Carbon\Carbon::parse($post->StartDate)->diffForhumans()  }}</td>
                                </ul>
                                <h3><a href="{{ route('post', $post->slug) }}">{{$post->title}}</a></h3>
                                <p>{!! htmlspecialchars_decode($post->body) !!}</p>
                                <a href="{{ route('post', $post->slug) }}" class="read-more-btn">ادامه مطلب <i class="icofont-rounded-double-right"></i></a>
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
@endforeach
 
    <!-- Start Subscribe Area -->
 @include('Frontend.Partials._newslater')
 <!-- End Subscribe Area -->
 <!-- Start Partner Area -->
 @include('Frontend.Partials._supporter')
 

@endsection