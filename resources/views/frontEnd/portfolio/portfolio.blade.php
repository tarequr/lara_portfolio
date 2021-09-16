<section id="portfolio" class="portfolio">
	<div class="portfolio-details">
		<div class="section-heading text-center">
			<h2>portfolio</h2>
		</div>
		<div class="container">
			<div class="portfolio-content">
				<div class="isotope">
					<div class="row">
						@foreach($portfolios as $portfolio)
						<div class="col-sm-4">
							<div class="item">
								<img src="{{ asset('public/upload/portfolio_images/'.$portfolio->image) }}" alt="portfolio image"/>
								<div class="isotope-overlay">
									<a href="https://{{$portfolio->link}}" target="_blank">
										{{ $portfolio->name }}
									</a>
								</div><!-- /.isotope-overlay -->
							</div><!-- /.item -->
						</div><!-- /.col -->
						@endforeach
					</div><!-- /.row -->
				</div><!--/.isotope-->
			</div><!--/.gallery-content-->
		</div><!--/.container-->
	</div><!--/.portfolio-details-->
</section><!--/.portfolio-->