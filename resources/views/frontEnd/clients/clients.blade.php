<section id="clients" class="clients">
	<div class="section-heading text-center">
		<h2>clients</h2>
	</div>
	<div class="clients-area">
		<div class="container">
			<div class="owl-carousel owl-theme" id="client">
				@foreach($clients as $client)
				<div class="item">
					<a href="https://{{$client->link}}" target="_blank">
						<img src="{{ asset('public/upload/client_images/'.$client->image) }}" alt="brand-image" />
					</a>
				</div><!--/.item-->
				@endforeach
			</div><!--/.owl-carousel-->
		</div><!--/.container-->
	</div><!--/.clients-area-->
</section><!--/.clients-->
</section><!--/.clients-->