@if(session('status'))
	<div class="alert alert-{{session()->has('level')?session('level'):'info'}} alert-dismissable">
        <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
        <strong>{{session('status')}}</strong>
    </div>
@endif