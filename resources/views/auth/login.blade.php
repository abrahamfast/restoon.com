@extends('layouts.app')

@section('wrapper')
<div class="col-lg-5">
    <div class="sign-form">
        <div class="sign-inner">
            <div class="sign-logo" id="logo">
                <a href="index.html"><img src="/images/logo.png" alt=""></a>
                <a href="index.html"><img class="logo-inverse" src="/images/dark-logo.png" alt=""></a>
            </div>
            <div class="form-dt">
                <div class="form-inpts checout-address-step">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-title">
                            <h6>{{ __('global.Sign In') }}</h6>
                        </div>
                        <div class="form-group pos_rel">
                            <input id="phone[number]" name="email" type="text" placeholder="{{ __('global.Enter Email Number') }}" class="form-control lgn_input @error('email') is-invalid @enderror"  value="{{ old('email') }}" required="">
                            <i class="uil uil-mobile-android-alt lgn_icon"></i>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group pos_rel">
                            <input id="password1" name="password" type="password" placeholder="{{ __('global.Enter Password') }}" class="form-control lgn_input" required="">
                            <i class="uil uil-padlock lgn_icon"></i>
                             @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group pos_rel">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('global.Remember Me') }}
                                    </label>
                                </div>
                        </div>

                        <button class="login-btn hover-btn" type="submit">{{ __('global.Sign In Now') }}</button>
                    </form>
                </div>
{{--                 <div class="password-forgor">
                    <a href="forgot_password.html">Forgot Password?</a>
                </div> --}}
                <div class="signup-link">
                    <p>{{ __('global.Dont have an account') }} <a href="/register">{{ __('global.Sign Up Now') }}</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-text text-center mt-3">
        <i class="uil uil-copyright"></i>Copyright 2020 <b>RESTOON</b> . All rights reserved
    </div>
</div>
@endsection
