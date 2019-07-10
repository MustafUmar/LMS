@extends('layouts.userlayout')

@section('content')

	<div class="container">
		<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li><a href="/user/accounts">Accounts</a></li>
			<li class="active">New Account</li>
		</ol>

		<div class="maincontent">
			<header class="page-header">
				<h1 class="page-title">New Account</h1>
			</header>

			<div class="row">
				<div class="col-sm-7">
					<form method="POST" action="/user/account/create">
						@csrf
						<div class="row">
							<div class="col-sm-12">
								<input class="form-control" name="account_name" type="text" placeholder="Account Name">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<input class="form-control" name="account_number" type="text" placeholder="Account Number">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6 text-right">
								<input class="btn btn-action" type="submit" value="Add account">
							</div>
						</div>
					</form>
				</div>
			</div>

			
		</div>
	</div>

@endsection