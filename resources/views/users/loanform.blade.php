@extends('layouts.userlayout')

@section('content')
	<div class="container">
		<div class="row">
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Loan Application</h1>
				</header>

				<form>
					<div class="row">
						<div class="col-sm-12">
							<input class="form-control" type="text" placeholder="Loan Amount">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-12">
							<select class="form-control">
								<option disabled selected value="">Employment Status</option>
								<option>Contract Worker</option>
								<option>Part timer</option>
								<option>Permanent</option>
								<option>Retired</option>
								<option>Self employed</option>
								<option>Temporary Employment</option>
								<option>Unemployed</option>
							</select>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-6">
							<input class="form-control" type="text" placeholder="Gross Monthly Income">
						</div>
						<div class="col-sm-6">
							<input class="form-control" type="text" placeholder="Net Monthly Income">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-6">
							<input class="form-control" type="text" placeholder="Monthly Expenses">
						</div>
						<div class="col-sm-6">
							<select class="form-control">
								<option disabled selected value="">Wage Type</option>
								<option>Weekly</option>
								<option>Monthly</option>
							</select>
						</div>
					</div>
					<br>
					<div class="row">
						<label class="radio-inline">
							Do you have any illness or medical condition that may result in you not repaying your loan?
						 	<input type="radio" value="option1"> Yes
						 	<input type="radio" value="option1"> No
						</label>
					</div>
					<br>
					<div class="row">
						<label class="radio-inline">
							Are you under debt review or insolvent?
						 	<input type="radio" value="option1"> Yes
						 	<input type="radio" value="option1"> No
						</label>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-6 text-right">
							<input class="btn btn-action" type="submit" value="Apply">
						</div>
					</div>
				</form>
			</article>
		</div>
				
	</div>
	

@endsection