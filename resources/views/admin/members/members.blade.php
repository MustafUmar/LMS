@extends('layouts.adminlayout')

@section('content')

    <!--======== Page Title and Breadcrumbs Start ========-->
    @component('shared.pageheader', ['links' => [['Dashboard','/admin/dashboard'], ['Members']]])
    Members
    @endcomponent
    <!--======== Page Title and Breadcrumbs End ========-->
    
    @include('shared.status')

	<div class="row">
    	<div class="col-md-12">
    		<div class="c_panel">
    			<div class="c_title">
    				<h2>Users</h2>
                    <ul class="nav navbar-right panel_options">
                        <li>
                            <a class="full-screen">
                                <span class="icon-size-fullscreen"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
    			</div>
    			<div class="c_content">
                    <div class="margin-bottom-20">
                        <div class="btn-group">
                          <a id="table-edit_new" href="{{url('/user/new')}}" class="btn btn-sm btn-wet-asphalt btn-raised rippler rippler-inverse"><i class="fa fa-plus"></i> Add New User</a>
                        </div>
                    </div>
    				<table id="members-table" class="table table-striped table-bordered" style="border-spacing:0px; width:100%;">
    					<thead>
                            <tr>
                            	<th>Member ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
    				</table>
    			</div>
    		</div>
    	</div>
    </div>

@endsection