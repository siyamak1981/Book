
@php

 $competitionpages = App\Models\CompetitionPage::where('status', 1)->get();

@endphp

<section class="features-area startup-features ptb-100">
    <div class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-lg-7 col-md-12">
                <div class="row">
           @foreach($competitionpages as $competitionpage)        
                    <div class="col-lg-6 col-md-6">
                        <div class="single-holder-box">
                            <img src="{{asset('Frontend/img/payment-img1.png') }}" alt="image">
                            <h3>{{ $competitionpage->title1 }} </h3>
                            <p>{!! htmlspecialchars_decode($competitionpage->summary1) !!}</p>
                        </div>

                        <div class="single-holder-box mt-30">
                            <img src="{{asset('Frontend/img/payment-img2.png') }}" alt="image">
                            <h3>{{ $competitionpage->title2 }} </h3>
                            <p>{!! htmlspecialchars_decode($competitionpage->summary2) !!}</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-holder-box mt-50">
                            <img src="{{asset('Frontend/img/payment-img3.png') }}" alt="image">
                            <h3>{{ $competitionpage->title3 }} </h3>
                            <p>{!! htmlspecialchars_decode($competitionpage->summary3) !!}</p>
                        </div>

                        <div class="single-holder-box mt-30">
                            <img src="{{asset('Frontend/img/payment-img4.png') }}" alt="image">
                            <h3>{{ $competitionpage->title4 }} </h3>
                            <p>{!! htmlspecialchars_decode($competitionpage->summary4) !!}</p>
                        </div>
                    </div>
                    @endforeach 
                </div>
            </div>

            <div class="col-lg-5 col-md-12">
                <div class="features-holder-content">
                    <div class="section-title">
                        <h2>{{ $competitionpage->title5 }}</h2>
                        <div class="bar"></div>
                        <p>{!! htmlspecialchars_decode($competitionpage->body) !!}</p>
                    </div>

                    <a href="#" class="btn btn-primary">خدمات ما</a>
                </div>
            </div>
        </div>
    </div>


    <div class="shape7"><img src="{{asset('Frontend/img/shape7.png') }}" alt="shape"></div>
    <div class="shape3"><img src="{{asset('Frontend/img/shape3.png') }}" alt="img"></div>
    <div class="bg-gray shape-1"></div>
    <div class="shape6"><img src="{{asset('Frontend/img/shape6.png') }}" alt="img"></div>
    <div class="shape8 rotateme"><img src="{{asset('Frontend/img/shape8.svg') }}" alt="shape"></div>
    <div class="shape9"><img src="{{asset('Frontend/img/shape9.svg') }}" alt="shape"></div>
    <div class="shape10"><img src="{{asset('Frontend/img/shape10.svg') }}" alt="shape"></div>
    <div class="shape11 rotateme"><img src="{{asset('Frontend/img/shape11.svg') }}" alt="shape"></div>
</section>