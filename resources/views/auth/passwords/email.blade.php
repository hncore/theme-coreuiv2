@extends(hncore_view('layouts.plain'))

{{-- Main Content --}}
@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">
            <h3 class="text-center mb-4">{{ trans('hncore::base.reset_password') }}</h3>
            <div class="nav-steps-wrapper">
                <ul class="nav nav-tabs">
                  <li class="nav-item active"><a class="nav-link active" href="#tab_1" data-toggle="tab"><strong>{{ trans('hncore::base.step') }} 1.</strong> {{ trans('hncore::base.confirm_email') }}</a></li>
                  <li class="nav-item"><a class="nav-link disabled text-muted"><strong>{{ trans('hncore::base.step') }} 2.</strong> {{ trans('hncore::base.choose_new_password') }}</a></li>
                </ul>
            </div>
            <div class="nav-tabs-custom">
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    @if (session('status'))
                        <div class="alert alert-success mt-3">
                            {{ session('status') }}
                        </div>
                    @else
                    <form class="col-md-12 p-t-10" role="form" method="POST" action="{{ route('hncore.auth.password.email') }}">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="control-label" for="email">{{ trans('hncore::base.email_address') }}</label>

                            <div>
                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div>
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ trans('hncore::base.send_reset_link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    @endif
                    <div class="clearfix"></div>
                  </div>
                  {{-- /.tab-pane --}}
                </div>
                {{-- /.tab-content --}}
              </div>

              <div class="text-center mt-4">
                <a href="{{ route('hncore.auth.login') }}">{{ trans('hncore::base.login') }}</a>

                @if (config('hncore.base.registration_open'))
                / <a href="{{ route('hncore.auth.register') }}">{{ trans('hncore::base.register') }}</a>
                @endif
              </div>
        </div>
    </div>
@endsection
