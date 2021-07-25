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

         @include('Frontend.Partials._sidebar_page')
        </div>
    </div>
</section>
<!-- End Blog Area -->
@endsection