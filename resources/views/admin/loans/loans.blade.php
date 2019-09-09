@extends('layouts.adminlayout')

@section('content')

	<!--======== Page Title and Breadcrumbs Start ========-->
    @component('shared.pageheader')
    	Loans
    @endcomponent
    <!--======== Page Title and Breadcrumbs End ========-->

    <div class="row">
    	<div class="col-md-6">
    		
			<div class="c_panel c_panel_default">
                <div class="c_title">
                    {{-- <h2>Panel title</h2> --}}
                </div>
                <div class="c_content">

                    <ul class="list-group">
                        <li class="list-group-item">Pending <span class="badge badge-info">2</span></li>
                        <li class="list-group-item">Approved <span class="badge badge-primary">10</span></li>
                        <li class="list-group-item">Disbursed <span class="badge badge-primary">8</span></li>
                        <li class="list-group-item">Porta ac consectetur ac <span class="badge badge-success">7</span></li>
                        <li class="list-group-item">Vestibulum at eros <span class="badge badge-danger">4</span></li>
                        <li class="list-group-item">Completed <span class="badge badge-warning">5</span></li>
                    </ul>

                </div>
            </div>

    	</div>
    </div>

@endsection