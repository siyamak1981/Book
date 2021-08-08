<div class="home-slides startup-home">
    @foreach($slidercompetitions as $slidercompetition)
    <div class="main-banner startup-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="hero-content">
                                <h1>{{$slidercompetition->title}}</h1>
                                <p>{!! htmlspecialchars_decode($slidercompetition->body) !!}!</p>

                                <a href="#" class="btn btn-primary">هم اکنون شروع کنید</a>
                                <a href="#" class="video-btn popup-youtube"> تماشای ویدیو <i class="icofont-play-alt-3"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="startup-image">
                                <img src="{{asset('Frontend/img/startup-shape/board.png') }}" class="wow fadeInDown" data-wow-delay="0.6s" alt="board">
                                <img src="{{asset('Frontend/img/startup-shape/chart1.png') }}" class="wow fadeInUp" data-wow-delay="0.6s" alt="chart1">
                                <img src="{{asset('Frontend/img/startup-shape/chart2.png') }}" class="wow fadeInLeft" data-wow-delay="0.6s" alt="chart2">
                                <img src="{{asset('Frontend/img/startup-shape/check-mark.png') }}" class="wow zoomIn" data-wow-delay="0.6s" alt="check-mark">
                                <img src="{{asset('Frontend/img/startup-shape/girl1.png') }}" class="wow bounceIn" data-wow-delay="0.6s" alt="girl1">
                                <img src="{{asset('Frontend/img/startup-shape/girl2.png') }}" class="wow fadeInDown" data-wow-delay="0.6s" alt="girl2">
                                <img src="{{asset('Frontend/img/startup-shape/line.png') }}" class="wow zoomIn" data-wow-delay="0.6s" alt="line">
                                <img src="{{asset('Frontend/img/startup-shape/man.png') }}" class="wow fadeInUp" data-wow-delay="0.6s" alt="man">
                                <img src="{{asset('Frontend/img/startup-shape/progress.png') }}" class="wow rotateIn" data-wow-delay="0.6s" alt="progress">
                                <img src="{{asset('Frontend/img/startup-shape/table.png') }}" class="wow fadeInUp" data-wow-delay="0.6s" alt="table">

                                <img src="{{asset('Frontend/img/startup-shape/main-image.png') }}" class="wow fadeInUp" data-wow-delay="0.6s" alt="main-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gray shape-1"></div>
        <div class="shape1"><img src="{{asset('Frontend/img/shape1.png') }}" alt="img"></div>
        <div class="shape2"><img src="{{asset('Frontend/img/shape2.png') }}" alt="img"></div>
        <div class="shape3"><img src="{{asset('Frontend/img/shape3.png') }}" alt="img"></div>
        <div class="shape6"><img src="{{asset('Frontend/img/shape6.png') }}" alt="img"></div>
        <div class="shape8 rotateme"><img src="{{asset('Frontend/img/shape8.svg') }}" alt="shape"></div>
        <div class="shape9"><img src="{{asset('Frontend/img/shape9.svg') }}" alt="shape"></div>
    </div>
    @endforeach
   

</div>