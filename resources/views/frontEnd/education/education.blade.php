<section id="education" class="education">
	<div class="section-heading text-center">
		<h2>education</h2>
	</div>
	<div class="container">
		<div class="education-horizontal-timeline">
			<div class="row">
				@foreach($educations as $education)
					<div class="col-sm-4" style="margin-top: 20px;">
						<div class="single-horizontal-timeline">
							<div class="experience-time">
								<h2>{{ date('Y',strtotime($education->start_date)) }} - 
									@if(date('Y',strtotime($education->end_date)) < 2000)
						                <span>Present</span>
						            @else
						            	{{ date('Y',strtotime($education->end_date))}}
						            @endif
								</h2>
								<h3>{{ $education->degree }}</h3>
							</div><!--/.experience-time-->
							<div class="timeline-horizontal-border">
								<i class="fa fa-circle" aria-hidden="true"></i>
								<span class="single-timeline-horizontal"></span>
							</div>
							<div class="timeline">
								<div class="timeline-content">
									<h4 class="title">
										{{ $education->institution }}
									</h4>
									<h5>{{ $education->location }}</h5>
									<p class="description">
										{{ $education->description }} 
									</p>
								</div><!--/.timeline-content-->
							</div><!--/.timeline-->
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</section><!--/.education-->