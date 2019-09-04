@extends('layouts.userlayout')

@section('content')

	<div class="container">
		<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li><a href="/user/accounts">Accounts</a></li>
			<li class="active">New Contribution Accont</li>
		</ol>

		<div class="maincontent">
			<header class="page-header">
				<h1 class="page-title">New Contribution Account </h1>
			</header>

			<div class="row">
				<div class="col-sm-7">
					<form method="POST" action="/user/ctbaccount/create">
						@csrf
						<div class="panel panel-default">
							<div class="panel-heading">
								<span>For account: {{$account->accountname.' - '.$account->accountnumber}}</span>
							</div>
							<div class="panel-body">
								<input type="hidden" name="aid" value="{{$account->id}}">
								<div class="row">
									<div class="col-sm-12">
										<input class="form-control" name="account_name" type="text" value="{{old('account_name')}}" placeholder="Account Name">
										@if($errors->first('account_name'))
										<span class="help-block">Enter valid name</span>
										@endif
									</div>
								</div>
							</div>
							<div class="panel-footer">
								<input class="btn btn-action" type="submit" value="Add">
							</div>
						</div>
					</form>
				</div>
			</div>

			
		</div>
	</div>

@endsection