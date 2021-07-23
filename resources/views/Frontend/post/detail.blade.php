@extends('Frontend.public.app')

@section('main-content')

@php

$newPost = App\Models\post::where('status', 1)->orderBy('created_at', 'ASC')->paginate(5);

@endphp
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
                <h2>جزئیات وبلاگ</h2>
            </div>
        </div>
    </div>

    <div class="shape1"><img src="assets/img/shape1.png" alt="img"></div>
    <div class="shape2"><img src="assets/img/shape2.png" alt="img"></div>
    <div class="shape3"><img src="assets/img/shape3.png" alt="img"></div>
    <div class="shape6"><img src="assets/img/shape6.png" alt="img"></div>
    <div class="shape8 rotateme"><img src="assets/img/shape8.svg" alt="shape"></div>
    <div class="shape9"><img src="assets/img/shape9.svg" alt="shape"></div>

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

<!-- Start Blog Details Area -->
<section class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details">
                    <div class="article-img">
                        <img src="{{Storage::disk('local')->url('posts/'.$post->image)}}" alt="blog-details">
                        <div class="date">{{$post->created_at}} <br></div>
                    </div>

                    <div class="article-content">
                        <ul class="category">
                            @foreach($post->tags as $tag)
                            <li>
                                <a href="{{route('post.tag', $tag->slug)}}">{{$tag->name}}</a>
                            </li>
                            @endforeach

                        </ul>

                        <h3>{{$post->title}}</h3>

                        <p>{{ $post->subtitle }}</p>
                        <blockquote class="blockquote">
                            <p>{!! htmlspecialchars_decode($post->body) !!}</p>
                    </div>
                </div>

          
                <div class="post-comments">
                    <h3>نظرات</h3>
                  
                    @foreach($post->comments as $comment)
                    <div class="single-comment">
                        <div class="comment-img">
                            <img src="{{ asset('Frontend/img/client1.jpg') }}" alt="client">
                        </div>
                        <div class="comment-content">
                            <h6>{{ $comment->user->first_name }} - {{ $comment->user->last_name }}</h6>
                            <p>{{ $comment->body }}</p>
                            <span>{{ \Carbon\Carbon::parse($comment->created_at)->diffForhumans()  }} </span>
                        </div>
                        <br>
                     
                    </div>
                    @endforeach
                   <hr>
                </div>
                @include('includes.messages')
                <div class="leave-a-reply">
                    <h3>نظر بدهید</h3>
                    <form action="{{ route('comments.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="body" cols="30" rows="5" class="form-control" placeholder="نظر شما"></textarea>
                                    <input type="hidden" name="post_id" value="{{ $post->id }}" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="btn btn-primary">ارسال</button>
                            </div>
                        </div>
                    </form>
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
                            @foreach($post->categories as $category)
                            <li>
                                <a href="{{route('post.category', $category->slug)}}">{{$category->name}}</a>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="widget widget_recent_products">
                        <h3 class="widget-title">پست های اخیر</h3>
                        <div class="bar"></div>

                        <ul>
                            @foreach($products as $product)
                            <li>
                                <div class="recent-products-thumb">
                                    <a href="#">
                                        <img src="{{ URL::to($product->image_one) }}" alt="blog-image">
                                    </a>
                                </div>

                                <div class="recent-products-content">
                                    <h3><a href="#">{{$product->product_title}}</a></h3>
                                    <ul>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                    </ul>
                                    <span class="date">{{$product->selling_price}} تومان</span>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="widget widget_tag_cloud">
                        <h3 class="widget-title">جدیدترین کتاب</h3>
                        <div class="bar"></div>

                        <div class="tagcloud">
                            @foreach($newPost as $npost)
                            <a href="#">{{$npost->title}}</a>
                            @endforeach
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
                                    <img src="assets/img/work-img1.jpg" alt="image">
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="assets/img/work-img2.jpg" alt="image">
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="assets/img/work-img3.jpg" alt="image">
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="assets/img/work-img4.jpg" alt="image">
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="assets/img/work-img5.jpg" alt="image">
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="assets/img/work-img6.jpg" alt="image">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Details Area -->

@endsection