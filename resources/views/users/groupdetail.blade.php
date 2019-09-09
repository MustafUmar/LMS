@extends('layouts.userlayout')

@section('content')

	<div class="container">
		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Contact</li>
		</ol>

		<div class="row">
			<!-- Article main content -->
			<article class="col-sm-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">{{$circle->name}}</h1>
				</header>

				<div class="row">
					<div class="col-md-9">
						<p>{{$circle->description}}</p>
					</div>
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="row">
									<div class="col-sm-6"><strong>Members</strong></div>
									<div class="col-sm-6">
										@if(Auth::user()->id == $circle->owner)
											<div class="flexed-right text-info">
												<span class="pd-0" data-toggle="modal" data-target="#request_modal"><i class="fa fa-plus"></i></span>
											</div>
										@endif
									</div>
								</div>
							</div>
							<ul class="list-group">
								@foreach($circle->users as $user)
									<li class="list-group-item">
										@if($user->id == $circle->owner)
											<span class="badge">admin</span>
										@endif
										{{$user->firstname.' '.$user->lastname}}
									</li>
								@endforeach
							</ul>
						</div>
						
					</div>
				</div>
			</article>
			
		</div>
	</div>

	<div class="modal fade" id="request_modal" tabindex="-1" role="dialog" aria-labelledby="requestModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="requestModal">Invite Members</h4>
	      </div>
	      <div class="modal-body">
	      	<input type="hidden" value="{{$circle->id}}" id="griddata">
	      	<div class="form-group">
	      		<input type="text" class="form-control" id="member-search" placeholder="Search Member ID">
	      	</div>
	       
	        <div class="list-group" id="group-fetch-list">
	        	<div class="loading-overlay">
	        		<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
					<span class="sr-only">Loading...</span>
	        	</div>
	        	@for($i=0;$i<10;$i++)
	        	<div class="list-group-item">
	        		<div class="two-flexed-left-shrink">
					  <div class="">
					    <div class="">
					      <img class="img-circle img-size-2" src="{{URL::asset('images/profile.jpg')}}" alt="...">
					    </div>
					  </div>
					  <div class="pd-3">
					  	<div class="two-flexed-spacebtw">
					  		<p class=""><strong>Media heading</strong></p>
					  		<button class="btn btn-default btn-sm">Send Invitation</button>
					  	</div>
					  </div>
					</div>
	        	</div>
	        	@endfor
	        </div>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>

@endsection