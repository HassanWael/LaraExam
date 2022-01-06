@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div id="particles-js"></div>
<div class="signUpContainer m-auto mt-5 d-flex flex-column  align-items-start">
    <h1 class="headerSignUp align-self-center">Sign Up</h1>
    <form id="signUpForm" method="post" action="{{ route('register') }}" >
        @csrf
        <div class="signElement">
            <label for="name" class="form-label fw-bold" >Full Name<span class="requiredStar"> *</span></label>
            <input type="text" name="name" class="form-control inputStyle" id="name">
            <small id="signNameMessage"></small>
          </div>
          <div class="signElement">
            <label for="email" class="form-label fw-bold" >Email address<span class="requiredStar"> *</span></label>
            <input type="email" name="email"class="form-control inputStyle" id="email">
            <div id="signEmailMessage">eg: username@domain.com</div>
          </div>
          <div class="signElement">
            <label for="signUpPassword" class="form-label fw-bold" >Password<span class="requiredStar"> *</span></label>
            <input type="password" name="password" class="form-control inputStyle" id="signUpPassword">
            <small id="signPassMessage">The Password should be between 6-18 characters.</small>

        </div>
        <div class="signElement">
            <label for="password-confirm"class="form-label fw-bold">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control inputStyle" name="password_confirmation" required autocomplete="new-password">

        </div>


          <div class="d-flex justify-content-center">
            <button type="submit" id="signSubmit">Sign Up</button><br>
          </div>
    </form>
</div>
<div class="logimMessage d-flex justify-content-center fw-bold stylesign">Already Have An Account? <a class="loginAndsignin" href="../pages/Login.html" > Login</a></div>

@endsection
