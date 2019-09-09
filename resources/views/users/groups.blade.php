@extends('layouts.userlayout')

@section('content')

	<div class="container">
		
		<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li class="active">Circles</li>
		</ol>

		@if (session('status'))
		    <p class="alert alert-{{session()->has('level')?session('level'):'info'}}">
		        {{ session('status') }}
		    </p>
		@endif

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Circles</h1>
				</header>
				<p><a href="/circle/new" class="btn btn-default">Create a circle</a></p>
				@foreach($groups as $group)
					<div class="panel panel-default">
					  <div class="panel-heading">
					  	<div class="row">
					  		<div class="col-sm-6"><a href="/circle/{{$group->id}}"><h3 class="panel-title ">{{$group->name}}</h3></a></div>
					  		<div class="col-sm-6 flexed-right text-info">
					  			<span><i class="fa fa-user fa-lg"></i> {{$group->users_count}}</span>
					  			@if($group->owner != Auth::user()->id)
									<span>Join Group</span>
								@endif
					  		</div>
					  	</div>
					  </div>
					  <div class="panel-body">
					    {{$group->description}}
					  </div>
					</div>
				@endforeach

			</article>
			<!-- /Article -->

		</div>

	</div>
	
		

@endsection