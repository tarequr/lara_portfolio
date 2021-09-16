<section id="contact" class="contact">
	<div class="section-heading text-center">
		<h2>contact me</h2>
	</div>
	<div class="container">
		<div class="contact-content">
			<div class="row">
				<div class="col-md-offset-1 col-md-5 col-sm-6">
					<div class="single-contact-box">
						<div class="text-center">
					        @if(Session::get('message'))
					          <div class="alert alert-success alert-dismissible">
					            <button type="button" class="close" data-dismiss="alert">&times;</button>
					            <strong>{{ Session::get('message')}}</strong>
					          </div>
					        @endif
					      </div><br>
						<div class="contact-form">
							<form method="POST" action="{{ route('send.message') }}">
								@csrf
								<div class="row">
									<div class="col-sm-6 col-xs-12">
										<div class="form-group">
										  <input type="text" class="form-control" id="name" placeholder="Name*" name="name">
										  <strong class="text-danger"> {{$errors->has('name') ? $errors->first('name') : '' }} </strong>
										</div><!--/.form-group-->
									</div><!--/.col-->
									<div class="col-sm-6 col-xs-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" placeholder="Email*" name="email">
											<strong class="text-danger"> {{$errors->has('email') ? $errors->first('email') : '' }} </strong>
										</div><!--/.form-group-->
									</div><!--/.col-->
								</div><!--/.row-->
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
											<strong class="text-danger"> {{$errors->has('subject') ? $errors->first('subject') : '' }} </strong>
										</div><!--/.form-group-->
									</div><!--/.col-->
								</div><!--/.row-->
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<textarea class="form-control" rows="8" id="comment" placeholder="Message" name="message"></textarea>
											<strong class="text-danger"> {{$errors->has('message') ? $errors->first('message') : '' }} </strong>
										</div><!--/.form-group-->
									</div><!--/.col-->
								</div><!--/.row-->
								<div class="row">
									<div class="col-sm-12">
										<div class="single-contact-btn">
											<button class="contact-btn">Submit</button>
										</div><!--/.single-single-contact-btn-->
									</div><!--/.col-->
								</div><!--/.row-->
							</form><!--/form-->
						</div><!--/.contact-form-->
					</div><!--/.single-contact-box-->
				</div><!--/.col-->
				<div class="col-md-offset-1 col-md-5 col-sm-6">
					<div class="single-contact-box">
						<div class="contact-adress">
							<div class="contact-add-head">
								<h3>{{ $user->name }}</h3>
								<p>{!! $user->short_title !!}</p>
							</div>
							<div class="contact-add-info">
								<div class="single-contact-add-info">
									<h3>phone</h3>
									<p>{{ $about->phone }}</p>
								</div>
								<div class="single-contact-add-info">
									<h3>email</h3>
									<p>{{ $about->email }}</p>
								</div>
								<div class="single-contact-add-info">
									<h3>website</h3>
									<p>{{ $about->website }}</p>
								</div>
							</div>
						</div><!--/.contact-adress-->
						<div class="hm-foot-icon">
							<ul>
								<li><a href="https://{{ $about->facebook }}"><i class="fa fa-facebook"></i></a></li><!--/li-->
								<li><a href="https://{{ $about->twitter }}"><i class="fa fa-twitter"></i></a></li><!--/li-->
								<li><a href="https://{{ $about->linkedin }}"><i class="fa fa-linkedin"></i></a></li><!--/li-->
								<li><a href="https://{{ $about->instagram }}"><i class="fa fa-instagram"></i></a></li><!--/li-->
							</ul><!--/ul-->
						</div><!--/.hm-foot-icon-->
					</div><!--/.single-contact-box-->
				</div><!--/.col-->
			</div><!--/.row-->
		</div><!--/.contact-content-->
	</div><!--/.container-->
</section><!--/.contact-->