<div class="navbar navbar-inverse navbar-fixed-top headroom" >
	<div class="container">
		<div class="navbar-header">
			<!-- Button for smallest screens -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a class="navbar-brand" href="/"><img src="{{URL::asset('front/images/logo.png')}}" alt="Progressus HTML5 template"></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav pull-right">
				<li class="active"><a href="/">Home</a></li>
				{{-- <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Member <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="/user/profile">Profile</a></li>
					</ul>
				</li> --}}
				@auth
					<li><a href="/user/accounts">Accounts</a></li>
				@endauth
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Circles <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="/circles">Browse Circles</a></li>
						<li><a href="#">Your Circle</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Loans <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="/loan/apply">Apply</a></li>
						<li><a href="#">Status</a></li>
					</ul>
				</li>
				{{-- <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="sidebar-left.html">Left Sidebar</a></li>
						<li class="active"><a href="sidebar-right.html">Right Sidebar</a></li>
					</ul>
				</li> --}}
				<li><a href="/about">About Us</a></li>
				<li><a href="/contact">Contact Us</a></li>
				@guest
					<li><a class="btn" href="/signin">SIGN IN / SIGN UP</a></li>
					
				@else
					<li><a href="/user/profile"><i class="fa fa-user"></i> <strong>{{Auth::user()->firstname}}</strong></a></li>
					<li><a><i class="fa fa-bell fa-lg"></i></a></li>
					<li>
						<a class="btn" href="{{ route('logout') }}"
		                        onclick="event.preventDefault();
		                        document.getElementById('logout-form').submit();">
	                        {{ __('Logout') }}
	                    </a>

	                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                        @csrf
	                    </form>
					</li>
				@endguest
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div> 