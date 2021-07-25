@extends('Frontend.public.app')

@section('main-content')


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

            @include('Frontend.Partials._sidebar_page')
        </div>
    </div>
</section>
<!-- End Blog Details Area -->

@endsection