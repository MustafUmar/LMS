@extends('layouts.adminlayout')

@section('content')

	@component('shared.pageheader', ['links' => [['Dashboard','/admin/dashboard'], ['User','/users'], ['User']]])
	    User
    @endcomponent

    <div class="row">
    	<div class="col-md-12">
    		
    		<div class="c_panel">
                <div class="c_title">
                	<div class="row">
                		<div class="col-md-4">
                			<h2>User Information</h2>
                		</div>
                		<div class="col-md-4 col-md-offset-4">
                			<a href="/user/edit/{{$admin->id}}" class="btn btn-default btn-flat">Edit</a>
                		</div>
                	</div>
                </div><!--/.c_title-->
                <div class="c_content">
					<div class="row">
						<div class="col-md-10">
							<div class="table-responsive about-table">
		                        <table class="table">
		                            <tbody>
		                                <tr>
		                                    <th>Name</th>
		                                    <td><a href="#">{{$admin->firstname.' '.$admin->lastname}}</a></td>
		                                </tr>
		                                <tr>
		                                    <th>Email</th>
		                                    <td><a href="#">{{$admin->email}}</a></td>
		                                </tr>
		                                <tr>
		                                    <th>Phone</th>
		                                    <td>{{$admin->phone}}</td>
		                                </tr>
		                                <tr>
		                                    <th>Role</th>
		                                    <td>{{ucfirst($admin->roles->first()->name)}}</td>
		                                </tr>
		                                <tr>
		                                    <th>Active</th>
		                                    <td>{{$admin->is_active}}</td>
		                                </tr>
		                                <tr>
		                                    <th>Last login</th>
		                                    <td>{{$admin->last_login}}</td>
		                                </tr>
		                            </tbody>
		                        </table>
		                    </div>
						</div>
						<div class="col-md-2 padding-10">
                            <div class="thumbnail box-shadowed">
                                <img src="{{asset('images/img-md.jpg')}}" alt="image">
                            </div>
                        </div>
					</div>
                    

                </div><!--/.c_content-->
            </div>

    	</div>
    </div>

@endsection