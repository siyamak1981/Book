<!-- Start Features Area -->
<section class="features-area marketing-features ptb-100">
	<div class="container">
		<div class="row h-100 justify-content-center align-items-center">
			<div class="col-lg-7 col-md-12">
				<div class="row">
					@foreach($abouts as $about)
					
					<div class="col-lg-6 col-md-6">
						<div class="single-holder-box">
							<img src="{{ asset('Frontend/img/payment-img1.png') }}" alt="image">
							<h3>{{$about->title1}}</h3>
							<p>{{$about->summary1}}. </p>
						</div>

						<div class="single-holder-box mt-30">
							<img src="{{ asset('Frontend/img/payment-img2.png') }}" alt="image">
							<h3>{{$about->title2}}</h3>
							<p>{{$about->summary2}}. </p>
						</div>
					</div>

					<div class="col-lg-6 col-md-6">
						<div class="single-holder-box mt-50">
							<img src="{{ asset('Frontend/img/payment-img3.png') }}" alt="image">
							<h3>{{$about->title3}}</h3>
							<p>{{$about->summary3}}. </p>
						</div>

						<div class="single-holder-box mt-30">
							<img src="{{ asset('Frontend/img/payment-img4.png') }}" alt="image">
							<h3>{{$about->title4}}</h3>
							<p>{{$about->summary4}}. </p>
						</div>
					</div>
				
				</div>
			</div>

			<div class="col-lg-5 col-md-12">
				<div class="features-holder-content">
					<div class="section-title">
						<h2>{{$about->title5}}</h2>
						<div class="bar"></div>
						<p>
					{!! htmlspecialchars_decode($about->body) !!}
						</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>

	<!-- <div class="about-inner-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="about-text">
                                <h3>مسابقات</h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="about-text">
                                <h3>ما چه کسانی هستیم</h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="about-text">
                                <h3>جایزه ها</h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="about-text">
                                <h3>تماس با ما</h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

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