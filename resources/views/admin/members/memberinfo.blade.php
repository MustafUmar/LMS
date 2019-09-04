@extends('layouts.adminlayout')

@section('content')

	@component('shared.pageheader', ['links' => [['Dashboard','/admin/dashboard'], ['Members','/members'], ['Member']]])
	    Member
    @endcomponent

    <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li role="presentation" class="active"><a href="#tab21" role="tab" data-toggle="tab">Personal Information</a></li>
            <li role="presentation"><a href="#tab22" role="tab" data-toggle="tab">Account Information</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active animated fadeInRight" id="tab21">

               <div class="row">
					<div class="col-md-10">
						<div class="profile-about">
							<h4>Personal Information</h4>
							<div class="table-responsive about-table">
		                        <table class="table">
		                            <tbody>
		                            	<tr>
		                                    <th>Member ID</th>
		                                    <td>{{$member->memberid}}</td>
		                                </tr>
		                                <tr>
		                                    <th>Name</th>
		                                    <td>{{$member->firstname.' '.$member->othername.' '.$member->lastname}}</td>
		                                </tr>
		                                <tr>
		                                    <th>Gender</th>
		                                    <td>{{$member->userdetail->gender}}</td>
		                                </tr>
		                                <tr>
		                                    <th>Marital Status</th>
		                                    <td>{{$member->userdetail->maritalstatus}}</td>
		                                </tr>
		                                <tr>
		                                    <th>Date of birth</th>
		                                    <td>{{$member->userdetail->dob}}</td>
		                                </tr>
		                                <tr>
		                                    <th>Place of birth</th>
		                                    <td>{{$member->userdetail->pob}}</td>
		                                </tr>
		                                <tr>
		                                    <th>Permanent Home Address</th>
		                                    <td>{{$member->userdetail->phaddress}}</td>
		                                </tr>
		                                <tr>
		                                    <th>Next of Kin Fullname</th>
		                                    <td>{{$member->userdetail->kinfullname}}</td>
		                                </tr>
		                                <tr>
		                                    <th>Next of Kin Phone Number</th>
		                                    <td>{{$member->userdetail->kinphonenum}}</td>
		                                </tr>
		                                <tr>
		                                    <th>Next of Kin Address</th>
		                                    <td>{{$member->userdetail->kinaddress}}</td>
		                                </tr>
		                                <tr>
		                                    <th>Profession</th>
		                                    <td>{{$member->userdetail->profession}}</td>
		                                </tr>
		                                <tr>
		                                    <th>Company Name</th>
		                                    <td>{{$member->userdetail->companyname}}</td>
		                                </tr>
		                                <tr>
		                                    <th>Company Address</th>
		                                    <td>{{$member->userdetail->companyaddress}}</td>
		                                </tr>
		                                <tr>
		                                    <th>Email</th>
		                                    <td>{{$member->email}}</td>
		                                </tr>
		                                <tr>
		                                    <th>Phone</th>
		                                    <td>{{$member->phone}}</td>
		                                </tr>
		                            </tbody>
		                        </table>
		                    </div>
						</div>
						
					</div>
					<div class="col-md-2 padding-10">
	                    <div class="thumbnail box-shadowed">
	                        <img src="{{asset('images/img-md.jpg')}}" alt="image">
	                    </div>
	                </div>
				</div>

            </div>
            <div role="tabpanel" class="tab-pane animated fadeInRight" id="tab22">
                
				<div class="profile-about">
	                <h4>Account Information</h4>
	                @foreach($member->account as $account)
						<div class="heading text-left">
		                    <h5>Account {{$loop->index + 1}}</h5>
		                </div>
		                <div class="c_panel top_bordered_default">
		                	<div class="c_title">
		                		{{-- <h5>Account {{$loop->index + 1}}</h5> --}}
		                	</div>
		                    <div class="c_content">
		                    	<div class="row">
		                    		<div class="col-md-7">
		                    			<div class="table-responsive">
						                    <table class="table about-table">
						                        <tbody>
						                        	<tr>
						                                <th>Bank Name</th>
						                                <td>{{$account->bankname}}</td>
						                            </tr>
						                            <tr>
						                                <th>Account Name</th>
						                                <td>{{$account->accountname}}</td>
						                            </tr>
						                            <tr>
						                                <th>Account Number</th>
						                                <td>{{$account->accountnumber}}</td>
						                            </tr>
						                            <tr>
						                                <th>Account Balance</th>
						                                <td>{{$account->balance}}</td>
						                            </tr>
						                        </tbody>
						                    </table>
						                </div>
		                    		</div>
		                    		<div class="col-md-5">
		                    			@foreach($account->contribute as $ctb)
		                    				<div class="heading text-left margin-bottom-5">
							                    <h5>Contribution Account {{$loop->index + 1}}</h5>
							                </div>
		                    				<div class="c_panel top_bordered_default">
		                    					<div class="c_title">
		                    					</div>
		                    					<div class="c_content">
		                    						<div>
		                    							<label>Name</label>
			                    						<p>{{$ctb->accountname}}</p>	
		                    						</div>
		                    						<div>
		                    							<label>Total Amount Contributed</label>
			                    						<p>{{$ctb->balance}}</p>	
		                    						</div>
		                    					</div>
		                    				</div>
		                    			@endforeach
		                    		</div>
		                    	</div>
								
		                    </div>
		                </div>
	                @endforeach
	            </div>

            </div>
        </div>
    </div>

    <div class="row">
    	<div class="col-md-12">
    		
            

    	</div>
    </div>

@endsection