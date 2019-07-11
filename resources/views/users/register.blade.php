@extends('layouts.userlayout')
@section('content')
	<!-- container -->
	<div class="container">
		<div class="row">
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Registration</h1>
				</header>

				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-3">

				@if($errors->any())
					<ul>
					@foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
					</ul>
				@endif
				<div class="">

					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Register a new account</h3>
							<p class="text-center text-muted">your information Should be the same with your bank <a href="/signin">Login</a> To Your Account </p>
							<hr>

							<form>


							<form method="POST" action="{{ route('register') }}">
								@csrf

								<div class="top-margin">
									<label>First Name</label>
									<input type="text" name="firstname" class="form-control">
								</div>
								<div class="top-margin">
									<label>Other Name</label>
									<input type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Last Name</label>
									<input type="text" name="lastname" class="form-control">
								</div>
								<div class="top-margin">
									<label>State of Origin
									</label>
									<input type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Place of Birth</label>
									<input type="text" class="form-control">
								</div>
								<br>
								<div class="row">
						
					</div>
					
					<div class="row">
						<div class="col-sm-3">
							<label>Date of Birth <span class="text-danger">*</span></label>
							<select class="form-control">
								<option disabled selected value="">Select Date</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
								<option>24</option>
								<option>25</option>
								<option>26</option>
								<option>27</option>
								<option>28</option>
								<option>29</option>
								<option>30</option>
								<option>31</option>
							</select>
						</div>
						<div class="col-sm-3">
							<label> Month <span class="text-danger">*</span></label>
							<input class="form-control" type="text" placeholder="select Month">
						</div>
							<div class="col-sm-3">
							<label>Year <span class="text-danger">*</span></label>
							<input class="form-control" type="text" placeholder="Select Year">
						</div>
						<br>
						<br>
						<div class="top-margin">
							<label>Permanent Home Address</label>
							<input type="text" class="form-control">
						</div>
						<div class="row">
						<div class="col-sm-2">
						
							<label>Occupation</label>
							<input type="text" name="form-control">
						</div>
						<div class="top-margin">
							<label>Maritel Status</label>
							<input type="text" name="top-margin">
						</div>
					</div>
					<div class="top-margin">
									<label>Business Address if Any <span class="text-danger">*</span></label>
									<input type="text" name="Address" class="form-control">
								</div>
						<div class="top-margin">
									<label>Email Address <span class="text-danger">*</span></label>
									<input type="text" name="email" class="form-control">
								</div>
								<div class="top-margin">
									<label>Phone Number <span class="text-danger">*</span></label>
									<input type="text" name="phone" class="form-control">
								</div>
								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Password <span class="text-danger">*</span></label>
										<input type="password" name="password" class="form-control">
									</div>
									<div class="col-sm-6">
										<label>Confirm Password <span class="text-danger">*</span></label>
										<input type="password" name="password_confirmation" class="form-control">
									</div>
								</div>
								<hr>
								<div class="top-margin">
									<label>Next of Kin Full Name <span class="text-danger">*</span></label>
									<input type="text" name="" class="form-control">
								</div>
								<div class="top-margin">
									<label>Next of Kin Phone Number <span class="text-danger">*</span></label>
									<input type="Number" name="" class="form-control">
								</div>
								<div class="top-margin">
									<label>Next of Kin Address <span class="text-danger">*</span></label>
									<input type="text" name="" class="form-control">
								</div>
								<div class="row">
									<div class="col-lg-8">
										<label class="checkbox">
											<input type="checkbox"> 
											I've read the <a href="page_terms.html">Terms and Conditions</a>
										</label>                        
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Register</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</article>
			<!-- /Article -->
		</div>
	</div>	<!-- /container -->
@endsection