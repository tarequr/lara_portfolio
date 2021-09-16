<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
        
        <!-- title of site -->
        <title>Browny</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="{{ asset('public/frontEnd/assets/logo/favicon.png') }}"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="{{ asset('public/frontEnd/assets/css/font-awesome.min.css') }}">

		<!--flat icon css-->
		<link rel="stylesheet" href="{{ asset('public/frontEnd/assets/css/flaticon.css') }}">

		<!--animate.css-->
        <link rel="stylesheet" href="{{ asset('public/frontEnd/assets/css/animate.css') }}">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="{{ asset('public/frontEnd/assets/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('public/frontEnd/assets/css/owl.theme.default.min.css') }}">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="{{ asset('public/frontEnd/assets/css/bootstrap.min.css') }}">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="{{ asset('public/frontEnd/assets/css/bootsnav.css') }}" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="{{ asset('public/frontEnd/assets/css/style.css') }}">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="{{ asset('public/frontEnd/assets/css/responsive.css') }}">
        

    </head>
	
	<body>

		@include('frontEnd.includes.header')
	
		@yield('content')

		@include('frontEnd.includes.footer')
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="{{ asset('public/frontEnd/assets/js/jquery.js') }}"></script>
        
        <!--modernizr.min.js-->
        <script src="{{ asset('public/frontEnd/https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js') }}"></script>
		
		<!--bootstrap.min.js-->
        <script src="{{ asset('public/frontEnd/assets/js/bootstrap.min.js') }}"></script>
		
		<!-- bootsnav js -->
		<script src="{{ asset('public/frontEnd/assets/js/bootsnav.js') }}"></script>
		
		<!-- jquery.sticky.js -->
		<script src="{{ asset('public/frontEnd/assets/js/jquery.sticky.js') }}"></script>
		
		<!-- for progress bar start-->

		<!-- progressbar js -->
		<script src="{{ asset('public/frontEnd/assets/js/progressbar.js') }}"></script>

		<!-- appear js -->
		<script src="{{ asset('public/frontEnd/assets/js/jquery.appear.js') }}"></script>

		<!-- for progress bar end -->

		<!--owl.carousel.js-->
        <script src="{{ asset('public/frontEnd/assets/js/owl.carousel.min.js') }}"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="{{ asset('public/frontEnd/assets/js/custom.js') }}"></script>
        
    </body>
	
</html>