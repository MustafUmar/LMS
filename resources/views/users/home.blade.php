@extends('layouts.userlayout')

@section('content')

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">The best place to tell people why they are here</h2>
		<p class="text-muted">
			The difference between involvement and commitment is like an eggs-and-ham breakfast:<br> 
			the chicken was involved; the pig was committed.
		</p>
	</div>
	<!-- /Intro-->

	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">Our Services</h3>
			
			<div class="row">
				<div class="col-md-4 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Personal Loans</h4></div>
					<div class="h-body text-center">
						<p>Get your laon for your business</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Savings Account</h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, commodi, sequi quis ad fugit omnis cumque a libero error nesciunt molestiae repellat quos perferendis numquam quibusdam rerum repellendus laboriosam reprehenderit! </p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Feature 3</h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, vitae, perferendis, perspiciatis nobis voluptate quod illum soluta minima ipsam ratione quia numquam eveniet eum reprehenderit dolorem dicta nesciunt corporis?</p>
					</div>
				</div>
			</div> <!-- /row  -->
		
		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space">Frequently Asked Questions</h2>
		<br>

		<div class="row">
			<div class="col-sm-6">
				<h3>Which code editor would you recommend?</h3>
				<p>I'd highly recommend you <a href="http://www.sublimetext.com/">Sublime Text</a> - a free to try text editor which I'm using daily. Awesome tool!</p>
			</div>
			<div class="col-sm-6">
				<h3>Nice header. Where do I find more images like that one?</h3>
				<p>
					Well, there are thousands of stock art galleries, but personally, 
					I prefer to use photos from these sites: <a href="http://unsplash.com">Unsplash.com</a> 
					and <a href="http://www.flickr.com/creativecommons/by-2.0/tags/">Flickr - Creative Commons</a></p>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="col-sm-6">
				<h3>Can I use it to build a site for my client?</h3>
				<p>
					Yes, you can. You may use this template for any purpose, just don't forget about the <a href="http://creativecommons.org/licenses/by/3.0/">license</a>, 
					which says: "You must give appropriate credit", i.e. you must provide the name of the creator and a link to the original template in your work. 
				</p>
			</div>
			<div class="col-sm-6">
				<h3>Can you customize this template for me?</h3>
				<p>Yes, I can. Please drop me a line to sergey-at-pozhilov.com and describe your needs in details. Please note, my services are not cheap.</p>
			</div>
		</div> <!-- /row -->

		<div class="jumbotron top-space">
			<h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>
     		<p class="text-right"><a class="btn btn-primary btn-large">Learn more »</a></p>
  		</div>

	</div>	<!-- /container -->

@endsection