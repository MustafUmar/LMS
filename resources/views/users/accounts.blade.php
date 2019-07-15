@extends('layouts.userlayout')

@section('content')

	<div class="container">
		<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li class="active">Accounts</li>
		</ol>

		@if (session('status'))
		    <p class="alert alert-success">
		        {{ session('status') }}
		    </p>
		@endif

		<div class="maincontent">
			<header class="page-header">
				<h1 class="page-title">Accounts</h1>
			</header>

			<div class="row">
				<div class="col-md-8">
					<div class="flexed mtop-2">
						<a href="/user/account/new" class="btn"><i class="fa fa-plus-circle fa-lg"></i> Add New Account</a>
						<a class="btn">Contribute all</a>
					</div>
					
					<div class="row">
						<div class="col-sm-10">

							@forelse($accounts as $account)
								<div class="thin-border2-box pd-2">
									<div class="row">
										<div class="col-sm-6">
											<p>{{$account->account_name}}</p>
											<p>{{$account->account_number}}</p>
										</div>
										<div class="col-sm-4">
											<p class="text-muted">March 2019</p>
											<p>5000</p>
										</div>
										<div class="col-sm-2">
											<button class="btn btn-sm pd-2" data-toggle="modal" data-target="#contribute-modal" data-member="{{$account->memberid}}">
												Contribute
											</button>
										</div>
									</div>
								</div>
							@empty
								<p class="alert alert-warning">
							        You have no account. <a href="/user/account/new">Create one.</a>
							    </p>
							@endforelse

							<div class="thin-border2-box pd-2">
								<div class="row">
									<div class="col-sm-6">
										<p>Gustav</p>
										<p>######</p>
									</div>
									<div class="col-sm-4">
										<p class="text-muted">March 2019</p>
										<p>5000</p>
									</div>
									<div class="col-sm-2">
										<button class="btn btn-sm pd-2">Contribute</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div>
						<label>Total Savings</label>
						<p>###</p>
					</div>
				</div>
			</div>
			
			
			
		</div>


		{{-- modal --}}
		<div class="modal fade" id="contribute-modal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Modal title</h4>
		      </div>
		      <div class="modal-body">
		        <div class="form-group">
		            <label class="control-label">Enter Amount</label>
		            <input type="number" class="form-control" id="contribute_amount">
		        </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Submit</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->


	</div>

@endsection