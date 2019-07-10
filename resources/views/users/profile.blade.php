@extends('layouts.userlayout')

@section('content')

	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Profile</li>
		</ol>

		<div class="maincontent">
			<header class="page-header">
				<h1 class="page-title">Profile</h1>
			</header>
			<br>

			<div class="row">
				<div class="col-sm-6">
					<label>Name</label>
					<p class="lead">{{$user->firstname.' '.$user->lastname}}</p>
				</div>
				<div class="col-sm-6">
					<label>Profile picture</label>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<label>MemberID</label>
					<p class="lead">{{$user->memberid}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<label>Email</label>
					<p class="lead">{{$user->email}}</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<label>Phone</label>
					<p class="lead">{{$user->phone}}</p>
				</div>
			</div>
		</div>
		
	</div>

@endsection