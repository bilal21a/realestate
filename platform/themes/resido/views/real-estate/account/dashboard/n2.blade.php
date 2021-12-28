@extends(Theme::getThemeNamespace() . '::views.real-estate.account.master2')
@php
$user = auth('account')->user();
@endphp
@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="modal-content" id="sign-up">
                        <div class="modal-body">
                            <h2 class="text-center">Quick Login</h2>
                            {{-- <h2 class="text-center">{{ trans('plugins/real-estate::dashboard.register-title') }}</h2> --}}
                            <br>
                            @include(Theme::getThemeNamespace() . '::views.real-estate.account.auth.includes.messages')

                            <form method="POST" class="simple-form" action="{{ route('public.account.register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <input id="first_name" type="text"
                                                       class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                                       name="first_name" value="{{ old('first_name') }}" required autofocus
                                                       placeholder="{{ trans('plugins/real-estate::dashboard.first_name') }}">
                                                <i class="ti-user"></i>
                                            </div>
                                            @if ($errors->has('first_name'))
                                                <span class="d-block invalid-feedback">
                                                    <strong>{{ $errors->first('first_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <input id="last_name" type="text"
                                                       class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                                       name="last_name" value="{{ old('last_name') }}" required
                                                       placeholder="{{ trans('plugins/real-estate::dashboard.last_name') }}">
                                                <i class="ti-user"></i>
                                            </div>
                                            @if ($errors->has('last_name'))
                                                <span class="d-block invalid-feedback">
                                                     <strong>{{ $errors->first('last_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <input id="email" type="email"
                                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                       name="email" value="{{ old('email') }}" required
                                                       placeholder="{{ trans('plugins/real-estate::dashboard.email') }}">
                                                <i class="ti-email"></i>
                                            </div>
                                            @if ($errors->has('email'))
                                                <span class="d-block invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div class="input-with-icon">
                                                <input id="username" type="text"
                                                       class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                                       name="username" value="{{ old('username') }}" required
                                                       {{-- placeholder="{{ trans('plugins/real-estate::dashboard.username') }}"> --}}
                                                       placeholder="Phone Number">
                                                <i class="ti-mobile"></i>
                                            </div>
                                            @if ($errors->has('username'))
                                                <span class="d-block invalid-feedback">
                                                    <strong>{{ $errors->first('username') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                @if (setting('enable_captcha') && is_plugin_active('captcha'))
                                    <div class="form-group">
                                        {!! Captcha::display() !!}
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="d-block invalid-feedback">
                                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                @endif
                                <div class="form-group">
                                    <button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">
                                        Proceed to Add Property
                                        {{-- {{ trans('plugins/real-estate::dashboard.register-cta') }} --}}
                                    </button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
