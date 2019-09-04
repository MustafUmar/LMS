@extends('layouts.adminlayout')

@section('content')

    <!--======== Page Title and Breadcrumbs Start ========-->
    @component('shared.pageheader')
    Dashboard
    @endcomponent
    <!--======== Page Title and Breadcrumbs End ========-->

	{{-- Top widget start --}}
	<div class="row">

        <div class="col-sm-6 col-md-4 col-lg-2">
            <div class="widget">
                <div class="widget-content bg-sun-flower">
                    <div class="text-center">
                        <span class="font-size-40 counter">100</span>
                        <p>Members</p>
                        <i class="fa fa-shopping-cart fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="col-sm-6 col-md-4 col-lg-2">
            <div class="widget">
                <div class="widget-content bg-peter-river">
                    <div class="text-center">
                        <span class="font-size-40 counter">87</span>
                        <p>Monthly Contributions</p>
                        <i class="fa fa-envelope fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-2">
            <div class="widget">
                <div class="widget-content bg-belize-hole">
                    <div class="text-center">
                        <span class="font-size-40 counter">35</span>
                        <p>Loans</p>
                        <i class="fa fa-code fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-2">
            <div class="widget">
                <div class="widget-content bg-green">
                    <div class="text-center">
                        <span class="font-size-40 counter">27</span>
                        <p>Reports</p>
                        <i class="fa fa-file-text fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-2">
            <div class="widget">
                <div class="widget-content bg-green-sea">
                    <div class="text-center">
                        <span class="font-size-40 counter">301</span>
                        <p>New Items</p>
                        <i class="fa fa-plus-circle fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-2">
            <div class="widget">
                <div class="widget-content bg-pumpkin">
                    <div class="text-center">
                        <span class="font-size-40 counter">63</span>
                        <p>Task</p>
                        <i class="fa fa-tasks fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>

    </div><!--/row-->
    {{-- Top widget end --}}

	{{--second section start--}}
    <div class="row">
    	<div class="col-md-6">
    		@component('shared.contributioninfo', ['ctb' => $ctbstat])
            @endcomponent
    	</div>
    </div>


@endsection