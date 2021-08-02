
<div class="home-slides startup-home">
    @foreach($sliders as $slider)
    <div class="main-banner startup-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="hero-content">
                                <h1>{{$slider->subtitle}}</h1>
                                <p>{!! htmlspecialchars_decode($slider->body) !!}!</p>
                                <a href="#" class="btn btn-primary">هم اکنون شروع کنید</a>
                                <a href="#" class="video-btn popup-youtube"> تماشای ویدیو <i class="icofont-play-alt-3"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <img src="{{ URL::to($slider->image) }}" />

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            <div class="bg-gray shape-1"></div>
            <div class="shape1"><img src="{{ asset('Frontend/assets/img/shape1.png') }}" alt="img"></div>
            <div class="shape2"><img src="{{ asset('Frontend/assets/img/shape2.png') }}" alt="img"></div>
            <div class="shape3"><img src="{{ asset('Frontend/assets/img/shape3.png') }}" alt="img"></div>
            <div class="shape6"><img src="{{ asset('Frontend/assets/img/shape6.png') }}" alt="img"></div>
            <div class="shape8 rotateme"><img src="{{ asset('Frontend/assets/img/shape8.svg') }}" alt="shape"></div>
            <div class="shape9"><img src="{{ asset('Frontend/assets/img/shape9.svg') }}" alt="shape"></div>
    </div>
    @endforeach


</div>