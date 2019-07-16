@extends('layouts.userlayout')

@section('content')
	<!-- container -->
	<div class="container">
        <ol class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li class="active">About Us</li>
		</ol>
		
		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">About us</h1>
				</header>
				<div class="container">
					<div class="row">
						<div class="col-md-4">
					      <img src="{{asset('images/cop1.png')}}">
					     </div>
					 	<div class="col-md-8">
					 		<h2 style="color: blue;"> Welcome to MCCSL Cooperative Society </h2>
					 		MCCSL is in true sense a credit cooperative society. It has been established in the year 2012 to meet the needs of the people based on agriculture and farming, it also initiates for the creation of jobs. On 20th September 2012, Moral Credit Cooperative Society is legally registered as multi-state cooperative society from the Agriculture Ministry of the Government of India and got its license to work in 10 states. It has its head office rooted in UP's capital Lucknow, the moral credit society is currently working in 10 states having more than 100 branches.
					 
					 	</div>	
					</div>
					
					 
					 <h2 style="color: blue">Our Mission</h2>
					 <p>
					 	To strengthen the economic and social status of its members with financial co-operation and to provide a path to progressive and prosperous India by strengthening the cooperative movement. Providing opportunity to members to move forward for their economic growth and development.
					 </p>
					 <h3 style="color: blue">Our Vission</h3>
					 <p>
					 	For strengthening the economic status of the society members by keeping their interest on priority. MCCSL utilizes its work force, better service and uses new technology for its members through training, employment creation etc. for enhancing a sense of cooperativeness along its members and for building a prosperous and buoyant nation.
					 </p>
					 <h4 style="color: blue">Key Points</h4>
					 <ul class="my-4">
              	<li><span class="ion-ios-checkmark-circle mr-2"></span> Registered Membersdo contribution Every Month</li>
              	<li><span class="ion-ios-checkmark-circle mr-2"></span> We Give Loan To Our Member With 0% interast rate</li>
              	<li><span class="ion-ios-checkmark-circle mr-2"></span> We share Profit At The End of The Year</li>
					</div>
						</div>
					</div>		
			</article>
		<center><h1 style="color: red">Our Cooperative Profile</h1></center>
			<div class="row">
				<div class="col-sm-3">
					<center>
						<img src="{{asset('images/cop1.png')}}" width="400px" height="400px">
						<h2 style="color: blue">Director</h2>
						<p>Dr. Pius Lukeman </p>
						<a href="#"><img src="{{asset('images/facebook.png')}}" alt="facebook" width="20px"></a>
						<a href="#"><img src="{{asset('images/twitter.jpg')}}" alt="twitter" width="20px" ></a>
						<a href="#"><img src="{{asset('images/instagram.jpg')}}" alt="instagram" width="30px"></a>

					</center>
				
				</div>

				<div class="col-sm-3">
					<center>
						<img src="{{asset('images/cop1.png')}}" width="400px" height="400px">
						<h2 style="color: blue">Director</h2>
						<p>Dr. Pius Lukeman </p>
						<a href="#"><img src="{{asset('images/facebook.png')}}" alt="facebook" width="20px"></a>
						<a href="#"><img src="{{asset('images/twitter.jpg')}}" alt="twitter" width="20px" ></a>
						<a href="#"><img src="{{asset('images/instagram.jpg')}}" alt="instagram" width="30px"></a>

					</center>
				
				</div>

				<div class="col-sm-3">
					<center>
						<img src="{{asset('images/cop1.png')}}" width="400px" height="400px">
						<h2 style="color: blue">Director</h2>
						<p>Dr. Pius Lukeman </p>
						<a href="#"><img src="{{asset('images/facebook.png')}}" alt="facebook" width="20px"></a>
						<a href="#"><img src="{{asset('images/twitter.jpg')}}" alt="twitter" width="20px" ></a>
						<a href="#"><img src="{{asset('images/instagram.jpg')}}" alt="instagram" width="30px"></a>

					</center>
				
				</div>
				<div class="col-sm-3">
					<center>
						<img src="{{asset('images/cop1.png')}}" width="400px" height="400px">
						<h2 style="color: blue">Director</h2>
						<p>Dr. Pius Lukeman </p>
						<a href="#"><img src="{{asset('images/facebook.png')}}" alt="facebook" width="20px"></a>
						<a href="#"><img src="{{asset('images/twitter.jpg')}}" alt="twitter" width="20px"></a>
						<a href="#"><img src="{{asset('images/instagram.jpg')}}" alt="instagram" width="30px"></a>

					</center>
				
				</div>


			</div>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
@endsection