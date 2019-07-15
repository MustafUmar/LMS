@extends('layouts.userlayout')
@section('content')
	<!-- container -->
	<div class="container">
		<div class="row">
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				{{-- <header class="page-header">
					<h1 class="page-title">Registration</h1>
				</header> --}}

				<div class="">

				@if($errors->any())
					<ul>
					@foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
					</ul>
				@endif

				<div class="col-sm-10 col-sm-offset-1">

					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Register a new account</h3>
							<p class="text-center text-muted">Already have an account? <a href="/signin">Login</a> to your Account </p>
							<hr>

							<form method="POST" id="register-form" action="{{ route('register') }}">
								@csrf
								<h4 class="form-header"><span class="heading-icon"><i class="fa fa-male fa-2x"></i></span>Personal Information</h4>
								<section class="form-section ph-4">
									<div class="top-margin">
										<div class="row">
											<div class="col-md-4">
												<label>First Name <span class="text-danger">*</span></label>
												<input type="text" name="firstname" class="form-control">
											</div>
											<div class="col-md-4">
												<label>Other Name (if any)</label>
												<input type="text" name="othername" class="form-control">
											</div>
											<div class="col-md-4">
												<label>Last Name <span class="text-danger">*</span></label>
												<input type="text" name="lastname" class="form-control">
											</div>
										</div>
									</div>
									<div class="top-margin">
										<div class="row">
											<div class="col-md-6">
												<label>Email <span class="text-danger">*</span></label>
												<input type="text" id="regemail" name="email" class="form-control">
											</div>
											<div class="col-md-6">
												<label>Phone Number <span class="text-danger">*</span></label>
												<input type="text" name="phone" class="form-control">
											</div>
										</div>
										
									</div>
									<div class="top-margin">
										<div class="row">
											<div class="col-md-4">
												<label>State of Origin <span class="text-danger">*</span></label>
												<input type="text" name="stateoforigin" class="form-control">
											</div>
											<div class="col-md-4">
												<label>Place of Birth <span class="text-danger">*</span></label>
												<input type="text" name="placeofbirth" class="form-control">
											</div>
											<div class="col-md-4">
												<label>Date of birth <span class="text-danger">*</span></label>
												<input type="text" name="dateofbirth" id="birthdatepicker" class="form-control" readonly>
											</div>
										</div>
										
									</div>
									<div class="top-margin">
										<div class="row">
											<div class="col-md-6">
												<label>Gender <span class="text-danger">*</span></label>
												<div class="radio-field">
													<label class="radio-inline">
													  <input type="radio" name="gender" value="single"> Male
													</label>
													<label class="radio-inline">
													  <input type="radio" name="gender" value="married"> Female
													</label>
												</div>
											</div>
											<div class="col-md-6">
												<label>Marital Status <span class="text-danger">*</span></label>
												<div class="radio-field">
													<label class="radio-inline">
													  <input type="radio" name="maritalstatus" value="single"> Single
													</label>
													<label class="radio-inline">
													  <input type="radio" name="maritalstatus" value="married"> Married
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="top-margin">
										<label>Permanent Home Address <span class="text-danger">*</span></label>
										<textarea name="phaddress" class="form-control" rows="3"></textarea>
									</div>
								</section>

								<h4 class="form-header"><span class="heading-icon"><i class="fa fa-users fa-2x"></i></span>Relations Information</h4>
								<section class="form-section ph-4">
									<div class="top-margin">
										<label>Next of Kin Full Name <span class="text-danger">*</span></label>
										<input type="text" name="nokfullname" class="form-control">
									</div>
									<div class="top-margin">
										<label>Next of Kin Phone Number <span class="text-danger">*</span></label>
										<input type="Number" name="nokphonenum" class="form-control">
									</div>
									<div class="top-margin">
										<label>Next of Kin Address <span class="text-danger">*</span></label>
										<textarea name="nokaddress" class="form-control" rows="3"></textarea>
									</div>
								</section>
								
								<h4 class="form-header"><span class="heading-icon"><i class="fa fa-user-md fa-2x"></i></span>Professional Information</h4>
								<section class="form-section ph-4">
									<div class="top-margin">
										<label>Profession <span class="text-danger">*</span></label>
										<input type="text" name="occupation" class="form-control">
									</div>
									<div class="top-margin">
										<label>Company Name (if any)</label>
										<input type="text" name="compname" class="form-control">
									</div>
									<div class="top-margin">
										<label>Company Address (if any)</label>
										<textarea name="compaddress" class="form-control" rows="3"></textarea>
									</div>
								</section>

								<h4 class="form-header"><span class="heading-icon"><i class="fa fa-building-o fa-2x"></i></span>Bank Information</h4>
								<section class="form-section ph-4">
									<h5>Your information should be the same with your bank</h5>
									<div class="top-margin">
										<label>Bank Name <span class="text-danger">*</span></label>
										<input type="text" name="bankname" class="form-control">
									</div>
									<div class="top-margin">
										<label>Account Name <span class="text-danger">*</span></label>
										<input type="text" name="accountname" class="form-control">
									</div>
									<div class="top-margin">
										<label>Account Number <span class="text-danger">*</span></label>
										<input type="number" name="accountnumber" class="form-control">
									</div>
								</section>
								
								<h4 class="form-header"><span class="heading-icon"><i class="fa fa-lock fa-2x"></i></span>Signup Account</h4>
								<section class="form-section ph-4">
									<div class="top-margin row">
										<div class="col-md-6">
											<label>Username <span class="text-danger">*</span></label>
											<input type="text" id="username" name="username" class="form-control" readonly>
										</div>
										
									</div>
									<div class="top-margin row">
										<div class="col-md-6">
											<label>Password <span class="text-danger">*</span></label>
											<input type="password" name="password" id="password" class="form-control">
										</div>
									</div>
									<div class="top-margin row">
										<div class="col-md-6">
											<label>Confirm Password <span class="text-danger">*</span></label>
											<input type="password" name="password_confirmation" class="form-control">
										</div>
									</div>
									<div class="top-margin">
										<label class="checkbox">
											<input type="checkbox"> 
											I've read the <a href="page_terms.html">Terms and Conditions</a>
										</label> 
									</div>
								</section>
								
								<hr>
								
								{{-- <div class="row top-margin">
									<div class="col-lg-8">
										                       
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Register</button>
									</div>
								</div> --}}
							</form>
						</div>
					</div>
				</div>
			</article>
			<!-- /Article -->
		</div>
	</div>	<!-- /container -->
@endsection