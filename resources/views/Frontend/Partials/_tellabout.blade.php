<!-- Start Feedback Area -->
<section class="feedback-area ptb-100 bg-gray">
	<div class="container">
		<div class="section-title">
			<h2>درباره ما چه می گویند</h2>
			<div class="bar"></div>
			<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
		</div>

		<div class="row">
			<div class="feedback-slides">
				@foreach($tellabouts as $tellabout)
				<div class="col-lg-12">
					<div class="single-feedback-box">
						<div class="client-info">
							<img src="{{URL::to($tellabout->image)}}" alt="client">
							<h3>{{$tellabout->name}}</h3>
							<span>{{$tellabout->role}} </span>
						</div>
						<p>{!! htmlspecialchars_decode($tellabout->body) !!}</p>
					</div>
				</div>
				@endforeach

			</div>
		</div>
	</div>

	<svg class="svg-feedback-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
		<path d="M0,70 C30,130 70,50 100,70 L100,100 0,100 Z" fill="#ffffff" />
	</svg>
</section>
<!-- End Feedback Area -->