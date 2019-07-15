@extends('layouts.userlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default mv-5">
                <div class="panel-body">
                    <h4 class="text-warning text-center">{{ __('Verify Your Email Address') }}</h4>
                    <hr>
                    <div >
                        @if (session('resent'))
                            <div class="alert alert-success text-center" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        <p class=" text-center">{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                        <p class="text-center">{{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
