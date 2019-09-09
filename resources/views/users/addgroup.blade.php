@extends('layouts.userlayout')

@section('content')

	<div class="container">
		
		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Contact</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Create circle</h1>
				</header>
				
				<form action="/circle/create" method="post">
					@csrf
					<div class="form-group {{$errors->has('name')?'has-warning':''}}">
					    <label for="exampleInputEmail1">Name</label>
					    <input type="text" name="name" class="form-control" placeholder="Name" value="{{old('name')}}">
						@if($errors->has('name'))
						    <span class="help-block">{{$errors->first('name')}}</span>
					    @endif
					</div>
					<div class="form-group" {{$errors->has('description')?'has-warning':''}}">
					    <label for="exampleInputEmail1">Description</label>
					    <textarea class="form-control" name="description" placeholder="Description"></textarea>
					    @if($errors->has('description'))
						    <span class="help-block">Please give a description about the circle.</span>
					    @endif
					</div>
					<div class="form-group {{$errors->has('pubpriv')?'has-warning':''}}"">
						<label class="checkbox-inline">
						  <input type="radio" name="pubpriv" value="public"> Public
						</label>
						<label class="checkbox-inline">
						  <input type="radio" name="pubpriv" value="private"> Private
						</label>
						@if($errors->has('description'))
						    <span class="help-block">Please choose type of circle.</span>
					    @endif
					</div>
					<div class="form-group">
						<input class="btn btn-action" type="submit" value="Save">
					</div>
				</form>
			</article>
		</div>
	</div>
@endsection