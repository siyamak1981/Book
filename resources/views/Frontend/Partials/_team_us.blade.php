    <!-- Start Team Area -->
    <section class="team-area ptb-100 bg-gray">
			<div class="container">
          
               
				<div class="section-title">
					<h2>تیم ما</h2>
					<div class="bar"></div>
					<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و ب</p>
				</div>

                <div class="row">
					<div class="team-slides">
                        @foreach($teams as $team)
						<div class="col-lg-12">
							<div class="single-team-member-box">
								<img src="{{URL::to($team->image)}}" alt="team">

								<div class="team-content">
									<h3>{{$team->name}}</h3>
									<span> {{$team->role}}</span>
								</div>
							</div>   
						</div>
                        @endforeach

					</div>
				</div> 
			</div>
      
		</section>
		<!-- End Team Area -->