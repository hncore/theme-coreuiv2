@extends(hncore_view('layouts.plain'))

@section('content')

<div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">
        <h3 class="text-center mb-4">{{ trans('hncore::base.verify_email.email_verification') }}</h3>
        <div class="card">
            <div class="card-body">
            {{ trans('hncore::base.verify_email.email_verification_required') }}

            @if (session('status') == 'verification-link-sent')
                <div class="mt-2">
                    <div class="alert alert-success my-0" role="alert">
                        <div class="d-flex">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                        </div>
                            <div>
                                {{ trans('hncore::base.verify_email.verification_link_sent') }}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            </div>
            <div class="card-footer d-flex align-center">
            <form method="POST" class="col-md-6" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="btn btn-sm btn-primary float-start float-left" tabindex="6">{{ trans('hncore::base.verify_email.resend_verification_link') }}</button>   
            </form>
            <form method="POST" class="col-md-6" action="{{ hncore_url('logout') }}">
                @csrf
                <button type="submit" class="btn btn-sm button-secondary float-end float-right" tabindex="7"><i class="la la-lock me-2"></i>{{ trans('hncore::base.logout') }}</button>   
            </form>     
            </div>       
        </div>
    </div>
</div>
@endsection