@extends('frontEnd.master')

@section('content')
<!--welcome-hero start -->
<section id="welcome-hero" class="welcome-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="header-text">
					<h2>hi <span>,</span> i am <br> {{ $user->name }}<span>.</span>   </h2>
					<p>{!! $user->short_title !!}</p>
					<a href="{{ route('resume.download',$user->id) }}">download resume</a>
				</div><!--/.header-text-->
			</div><!--/.col-->
		</div><!-- /.row-->
	</div><!-- /.container-->

</section><!--/.welcome-hero-->
<!--welcome-hero end -->


<!--about start -->
@include('frontEnd.about.about')
<!--about end -->

<!--education start -->
@include('frontEnd.education.education')
<!--education end -->

<!--skills start -->
@include('frontEnd.skills.skills')
<!--skills end -->

<!--experience start -->
@include('frontEnd.experience.experience')
<!--experience end -->

<!--profiles start -->
@include('frontEnd.profiles.profiles')
<!--profiles end -->

<!--portfolio start -->
@include('frontEnd.portfolio.portfolio')
<!--portfolio end -->

<!--clients start -->
@include('frontEnd.clients.clients')
<!--clients end -->

<!--contact start -->
@include('frontEnd.contact.contact')
<!--contact end -->

@endsection