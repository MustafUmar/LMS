@extends('layouts.adminlayout')

@section('content')

    <!--======== Page Title and Breadcrumbs Start ========-->
    @component('shared.pageheader', ['links' => [['Dashboard','/admin/dashboard'], ['Users','/users'], ['New User']]])
    New User
    @endcomponent
    <!--======== Page Title and Breadcrumbs End ========-->
	
	<div class="row">
		<div class="col-md-12">
			<div class="c_panel">
				<div class="c_content">
					<h5 class="head-style-1">
                        <span class="head-text-green">
                            <strong>New User</strong>
                        </span>
                    </h5>

                    <form class="validator form-horizontal " id="newuserform" method="post" action="/user/create" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group ">
                                    <label for="firstname" class="control-label col-lg-3">First Name</label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="firstname" name="firstname" type="text" value="{{old('firstname')}}" />
                                        @if($errors->has('firstname'))
                                            <label for="firstname" class="error">{{$errors->first('firstname')}}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="lastname" class="control-label col-lg-3">Last Name</label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="lastname" name="lastname" type="text" value="{{old('lastname')}}"/>
                                        @if($errors->has('lastname'))
                                            <label for="lastname" class="error">{{$errors->first('lastname')}}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="email" class="control-label col-lg-3">Email</label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="email" name="email" type="text" value="{{old('email')}}"/>
                                        @if($errors->has('email'))
                                            <label for="email" class="error">{{$errors->first('email')}}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="phone" class="control-label col-lg-3">Phone Number</label>
                                    <div class="col-lg-6">
                                        <input class=" form-control" id="phone" name="phone" type="text" value="{{old('phone')}}"/>
                                        @if($errors->has('phone'))
                                            <label for="phone" class="error">{{$errors->first('phone')}}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="usertype" class="control-label col-lg-3">User Type</label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="usertype" name="usertype">
                                            <option value="" disabled selected>-- Choose user type --</option>
                                            <option value="admin" {{old('usertype') == 'admin' ? 'selected' : ''}}>Admin</option>
                                            <option value="manager" {{old('usertype') == 'manager' ? 'selected' : ''}}>Manager</option>
                                            <option value="account" {{old('usertype') == 'account' ? 'selected' : ''}}>Accountant</option>
                                            <option value="staff" {{old('usertype') == 'staff' ? 'selectes=d' : ''}}>Staff</option>
                                        </select>
                                        @if($errors->has('usertype'))
                                            <label for="usertype" class="error">{{$errors->first('usertype')}}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary btn-flat" type="submit">Save</button>
                                        <button class="btn btn-default btn-flat" type="button">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="thumbnail box-shadowed">
                                    <img src="{{asset('images/img-md.jpg')}}" alt="image">
                                </div>
                                <div class="text-center bordered-2">
                                    <span class="btn btn-wet-asphalt upload-btn">
                                        Upload Pic <input type="file">
                                    </span>
                                </div>
                            </div>
                        </div>
                    	
                    </form>
				</div>
			</div>
		</div>
	</div>

@endsection