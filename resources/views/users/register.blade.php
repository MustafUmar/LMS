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
							<p class="text-center text-muted">Already have an account? <a href="/signin">Login</a> to your account.</p>
							<hr>

							<form method="POST" id="register-form" action="{{ route('register') }}">
								@csrf
								<h4 class="form-header"><span class="heading-icon"><i class="fa fa-male fa-2x"></i></span>Personal Information</h4>
								<section class="form-section ph-4">
									<div class="top-margin">
										<div class="row">
											<div class="col-md-4">
												<label>First Name <span class="text-danger">*</span></label>
												<input type="text" name="firstname" class="form-control" value="{{old('firstname')}}">
											</div>
											<div class="col-md-4">
												<label>Other Name (if any)</label>
												<input type="text" name="othername" class="form-control" value="{{old('othername')}}">
											</div>
											<div class="col-md-4">
												<label>Last Name <span class="text-danger">*</span></label>
												<input type="text" name="lastname" class="form-control" value="{{old('lastname')}}">
											</div>
										</div>
									</div>
									<div class="top-margin">
										<div class="row">
											<div class="col-md-6">
												<label>Email <span class="text-danger">*</span></label>
												<input type="text" id="regemail" name="email" class="form-control" value="{{old('email')}}">
											</div>
											<div class="col-md-6">
												<label>Phone Number <span class="text-danger">*</span></label>
												<input type="text" name="phone" class="form-control" value="{{old('phone')}}">
											</div>
										</div>
										
									</div>
									<div class="top-margin">
										<div class="row">
											<div class="col-md-4">
												<label>State of Origin <span class="text-danger">*</span></label>
												<input type="text" name="stateoforigin" class="form-control" value="{{old('stateoforigin')}}">
											</div>
											<div class="col-md-4">
												<label>Place of Birth <span class="text-danger">*</span></label>
												<input type="text" name="placeofbirth" class="form-control" value="{{old('placeofbirth')}}">
											</div>
											<div class="col-md-4">
												<label>Date of birth <span class="text-danger">*</span></label>
												<input type="text" name="dateofbirth" id="birthdatepicker" class="form-control" value="{{old('dateofbirth')}}" readonly>
											</div>
										</div>
										
									</div>
									<div class="top-margin">
										<div class="row">
											<div class="col-md-6">
												<label>Gender <span class="text-danger">*</span></label>
												<div class="radio-field">
													<label class="radio-inline">
													  <input type="radio" name="gender" {{old('gender') == 'M' ? 'checked' : ''}} value="M"> Male
													</label>
													<label class="radio-inline">
													  <input type="radio" name="gender" {{old('gender') == 'F' ? 'checked' : ''}} value="F"> Female
													</label>
												</div>
											</div>
											<div class="col-md-6">
												<label>Marital Status <span class="text-danger">*</span></label>
												<div class="radio-field">
													<label class="radio-inline">
													  <input type="radio" name="maritalstatus" {{old('maritalstatus') == 'S' ? 'checked' : ''}} value="S"> Single
													</label>
													<label class="radio-inline">
													  <input type="radio" name="maritalstatus" {{old('maritalstatus') == 'M' ? 'checked' : ''}} value="M"> Married
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="top-margin">
										<label>Permanent Home Address <span class="text-danger">*</span></label>
										<textarea name="phaddress" class="form-control" rows="3">{{old('placeofbirth')}}</textarea>
									</div>
								</section>

								<h4 class="form-header"><span class="heading-icon"><i class="fa fa-users fa-2x"></i></span>Relations Information</h4>
								<section class="form-section ph-4">
									<div class="top-margin">
										<label>Next of Kin Full Name <span class="text-danger">*</span></label>
										<input type="text" name="nokfullname" class="form-control" value="{{old('nokfullname')}}">
									</div>
									<div class="top-margin">
										<label>Next of Kin Phone Number <span class="text-danger">*</span></label>
										<input type="Number" name="nokphonenum" class="form-control" value="{{old('nokphonenum')}}">
									</div>
									<div class="top-margin">
										<label>Next of Kin Address <span class="text-danger">*</span></label>
										<textarea name="nokaddress" class="form-control" rows="3">{{old('nokaddress')}}</textarea>
									</div>
								</section>
								
								<h4 class="form-header"><span class="heading-icon"><i class="fa fa-user-md fa-2x"></i></span>Professional Information</h4>
								<section class="form-section ph-4">
									<div class="top-margin">
										<label>Profession <span class="text-danger">*</span></label>
										<input type="text" name="occupation" class="form-control" value="{{old('occupation')}}">
									</div>
									<div class="top-margin">
										<label>Company Name (if any)</label>
										<input type="text" name="compname" class="form-control" value="{{old('compname')}}">
									</div>
									<div class="top-margin">
										<label>Company Address (if any)</label>
										<textarea name="compaddress" class="form-control" rows="3">{{old('compaddress')}}</textarea>
									</div>
								</section>

								<h4 class="form-header"><span class="heading-icon"><i class="fa fa-building-o fa-2x"></i></span>Bank Information</h4>
								<section class="form-section ph-4">
									<h5>Your information should be the same with your bank</h5>
									<div class="top-margin">
										<label>Bank Name <span class="text-danger">*</span></label>
										<input type="text" name="bankname" class="form-control" value="{{old('bankname')}}">
									</div>
									<div class="top-margin">
										<label>Account Name <span class="text-danger">*</span></label>
										<input type="text" name="accountname" class="form-control" value="{{old('accountname')}}">
									</div>
									<div class="top-margin">
										<label>Account Number <span class="text-danger">*</span></label>
										<input type="number" name="accountnumber" class="form-control" value="{{old('accountnumber')}}">
									</div>
								</section>
								
								<h4 class="form-header"><span class="heading-icon"><i class="fa fa-lock fa-2x"></i></span>Signup Account</h4>
								<section class="form-section ph-4">
									<div class="top-margin row">
										<div class="col-md-6">
											<label>Username <span class="text-danger">*</span></label>
											<input type="text" id="username" name="username" class="form-control" value="{{old('username')}}" readonly>
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