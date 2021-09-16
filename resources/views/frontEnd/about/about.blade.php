<section id="about" class="about">
	<div class="section-heading text-center">
		<h2>about me</h2>
	</div>
	<div class="container">
		<div class="about-content">
			<div class="row">
				<div class="col-sm-6">
					<div class="single-about-txt">
						<h3>{{ $about->title }}</h3>
						<p>{{ $about->description }}</p>
						<div class="row">
							<div class="col-sm-4">
								<div class="single-about-add-info">
									<h3>phone</h3>
									<p>{{ $about->phone }}</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="single-about-add-info">
									<h3>email</h3>
									<p>{{ $about->email }}</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="single-about-add-info">
									<h3>website</h3>
									<p>{{ $about->website }}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-offset-1 col-sm-5">
					<div class="single-about-img">
						<img src="{{ asset('public/upload/about_images/'.$about->image) }}" alt="profile_image">
						<div class="about-list-icon">
							<ul>
								<li>
									<a href="https://{{ $about->facebook }}" target="_blank">
										<i  class="fa fa-facebook" aria-hidden="true"></i>
									</a>
								</li><!-- / li -->
								<li>
									<a href="https://{{ $about->twitter }}" target="_blank">
										<i  class="fa fa-twitter" aria-hidden="true"></i>
									</a>
									
								</li><!-- / li -->
								<li>
									<a href="https://{{ $about->linkedin }}" target="_blank">
										<i  class="fa fa-linkedin" aria-hidden="true"></i>
									</a>
								</li><!-- / li -->
								<li>
									<a href="https://{{ $about->instagram }}" target="_blank">
										<i  class="fa fa-instagram" aria-hidden="true"></i>
									</a>
								</li><!-- / li -->
							</ul><!-- / ul -->
						</div><!-- /.about-list-icon -->

					</div>

				</div>
			</div>
		</div>
	</div>
</section><!--/.about-->
