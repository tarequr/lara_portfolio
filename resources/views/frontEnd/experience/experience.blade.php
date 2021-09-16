<section id="experience" class="experience">
	<div class="section-heading text-center">
		<h2>experience</h2>
	</div>
	<div class="container">
		<div class="experience-content">
			<div class="main-timeline">
				<ul>
					@foreach($experiences as $experience)
					<li>
						<div class="single-timeline-box fix">
							<div class="row">
								<div class="col-md-5">
									<div class="experience-time text-right">
										<h2>{{ date('Y',strtotime($experience->start_date)) }} - 
											@if(date('Y',strtotime($experience->end_date)) < 2000)
								                <span>Present</span>
								            @else
								            	{{ date('Y',strtotime($experience->end_date))}}
								            @endif
										</h2>
										<h3>{{ $experience->designation }}</h3>
									</div><!--/.experience-time-->
								</div><!--/.col-->
								<div class="col-md-offset-1 col-md-5">
									<div class="timeline">
										<div class="timeline-content">
											<h4 class="title">
												<span><i class="fa fa-circle" aria-hidden="true"></i></span>
												{{ $experience->company_name }}
											</h4>
											<h5>{{ $experience->location }}</h5>
											<p class="description">{{ $experience->description }}</p>
										</div><!--/.timeline-content-->
									</div><!--/.timeline-->
								</div><!--/.col-->
							</div>
						</div><!--/.single-timeline-box-->
					</li>
					@endforeach
				</ul>
			</div><!--.main-timeline-->
		</div><!--.experience-content-->
	</div>

</section><!--/.experience-->