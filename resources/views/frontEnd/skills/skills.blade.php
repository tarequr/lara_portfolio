<section id="skills" class="skills">
	<div class="skill-content">
		<div class="section-heading text-center">
			<h2>skills</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="single-skill-content">
						@foreach($skills as $skill)
						<div class="barWrapper">
							<span class="progressText">{{ $skill->name }}</span>
							<div class="single-progress-txt">
								<div class="progress ">
									<div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->percentage }}" aria-valuemin="10" aria-valuemax="100" style="">
										  
									</div>
								</div>
								<h3>{{ $skill->percentage }}%</h3>	
							</div>
						</div><!-- /.barWrapper -->
						@endforeach
					</div>
				</div>
			</div><!-- /.row -->
		</div>	<!-- /.container -->		
	</div><!-- /.skill-content-->
</section><!--/.skills-->