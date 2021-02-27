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
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-title">
                            <h6>{{ __('global.register') }}</h6>
                        </div>
                        <div class="form-group pos_rel">
                            <input id="full[name]" name="name"  type="text" placeholder="{{ __('global.Full name') }}" class="form-control lgn_input @error('name') is-invalid @enderror" value="{{ old('name') }}" required="">
                            <i class="uil uil-user-circle lgn_icon"></i>
                            @error('fullName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group pos_rel">
                            <input id="email[address]" name="email" type="email" placeholder="{{ __('global.Email Address') }}" class="form-control lgn_input @error('email') is-invalid @enderror" value="{{ old('email') }}"  required="">
                            <i class="uil uil-envelope lgn_icon"></i>
                             @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group pos_rel">
                            <input id="phone[number]" value="{{ old('phone') }}" name="phone" type="text" placeholder="{{ __('global.Phone Number') }}" class="form-control lgn_input" required="" value="{{ old('phone') }}">
                            <i class="uil uil-mobile-android-alt lgn_icon"></i>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
{{--                         <div class="form-group pos_rel">
                            <label class="control-label">{{ __('global.Enter Code') }}</label>
                            <ul class="code-alrt-inputs signup-code-list">
                                <li>
                                    <input id="code[1]" name="number" type="text" placeholder="" class="form-control input-md" required="">
                                </li>
                                <li>
                                    <input id="code[2]" name="number" type="text" placeholder="" class="form-control input-md" required="">
                                </li>
                                <li>
                                    <input id="code[3]" name="number" type="text" placeholder="" class="form-control input-md" required="">
                                </li>
                                <li>
                                    <input id="code[4]" name="number" type="text" placeholder="" class="form-control input-md" required="">
                                </li>
                                <li>
                                    <a class="chck-btn hover-btn code-btn145" href="#">{{ __('global.Send') }}</a>
                                </li>
                            </ul>
                            <a href="#" class="resend-link">{{ __('global.Resend Code') }}</a>
                        </div> --}}
                        <div class="form-group pos_rel">
                            <input id="password" name="password" type="password" placeholder="{{ __('global.New Password') }}" class="form-control lgn_input" required="">
                            <i class="uil uil-padlock lgn_icon"></i>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group pos_rel">
                            <input id="password-confirm" name="password_confirmation" type="password" placeholder="{{ __('global.password confirm') }}" class="form-control lgn_input" required autocomplete="new-password">
                            <i class="uil uil-padlock lgn_icon"></i>
                        </div>
                        <button class="login-btn hover-btn" type="submit">{{ __('global.Sign Up Now') }}</button>
                    </form>
                </div>
                <div class="signup-link">
                    <p>{{ __('global.I have an account?') }}<a href="/login">{{ __('global.Sign In Now') }}</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-text text-center mt-3">
        <i class="uil uil-copyright"></i>Copyright 2020 <b>RESTOON</b> . All rights reserved
    </div>
</div>

@endsection
