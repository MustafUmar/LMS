@extends('layouts.userlayout')

@section('content')

	<div class="container">
		<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li class="active">Accounts</li>
		</ol>

		@if (session('status'))
		    <p class="alert alert-{{session()->has('level')?session('level'):'info'}}">
		        {{ session('status') }}
		    </p>
		@endif
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<div class="maincontent">
			<header class="page-header">
				<h1 class="page-title">Accounts</h1>
			</header>

			<div class="row">
				
				<div class="col-md-8">

					<div class="flexed mtop-2">
						<span class="pd-3">This month: {{Carbon\Carbon::parse($mctb->begin_date)->format('F Y')}}</span>
						<a href="/user/account/new" class="btn"><i class="fa fa-plus-circle fa-lg"></i> Add New Account</a>
						<a class="btn">Contribute all</a>
					</div>
					@forelse($accounts as $account)
						<div class="panel panel-default">
							<div class="panel-heading">{{$account->accountname.' - '.$account->accountnumber}}</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-12">
										<div class="two-flexed-spacebtw">
											<h5>{{$account->contribute ? count($account->contribute): 0}} Contribution account(s)</h5>
											<a href="/user/ctbaccount/{{$account->id}}/new" class="btn">Add Contribution Account</a>
										</div>
										
										@forelse($account->contribute as $contrib)
											<div class="thin-border2-box pd-2">
												<div class="row">
													<div class="col-sm-6">
														<p>{{$contrib->accountname}}</p>
														{{-- <p>{{$account->accountnumber}}</p> --}}
													</div>
													<div class="col-sm-4">
														<p class="text-muted">{{Carbon\Carbon::parse($mctb->begin_date)->format('F Y')}}</p>
														@if(count($contrib->transaction) > 0) 
														{{-- <p>{{array_reduce($contrib->transaction, function($a,$b){return $a + $b['amount'];})}}</p> --}}
															<p>&#8358; @money(array_sum(array_column(json_decode($contrib->transaction), 'amount')))</p>
														@else
															<p>&#8358; @money(0)</p>
														@endif
													</div>
													<div class="col-sm-2">
														<button class="btn btn-sm pd-2" data-toggle="modal" data-target="#contribute-modal" data-member="{{$contrib->id}}" data-account="{{$contrib->accountname}}">
															Contribute
														</button>
													</div>
												</div>
											</div>
										@empty
											<p class="alert alert-warning">
										        No contribution account.
										    </p>
										@endforelse

									</div>
								</div>
							</div>
						</div>
					@empty
						<div class="alert alert-warning">
							You have no account. <a href="/user/account/new">Create one.</a>
						</div>
					@endforelse
					
				</div>
				<div class="col-md-4">
					<div>
						<label>Total Savings</label>
						<p>&#8358; @money(array_sum(array_column(json_decode($accounts), 'balance')))</p>
					</div>
					<div>
						<label>Last month savings</label>
						<p>###</p>
					</div>
					
				</div>
			</div>
			
			
			
		</div>


		{{-- modal --}}
		<div class="modal fade" id="contribute-modal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		    	<form action="/user/contribute" method="post">
		    		@csrf
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Contribute account: <span id="modal-accountname"></span></h4>
					</div>
					<div class="modal-body">
						<input type="hidden" name="ident" id="modal-trace">
						<div class="form-group">
						    <label class="control-label">Enter Amount</label>
						    <input type="number" name="contribute_amount" class="form-control" id="contribute_amount">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->


	</div>

@endsection