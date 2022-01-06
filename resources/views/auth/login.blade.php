@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div id="particles-js"></div>

<div class="container">
    <div class="row">
        <div class="col-lg-3"> </div>
        <div class="col-lg-6 col-md-12">

            <div class="loginContainer">
                <h1 class="headerLogin">Login</h1>
                <form id="loginForm"   action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="loginElement">
                        <label for="loginEmail" class="labelInput fw-bold" >Email address<span class="requiredStar"> *</span></label><br>
                        <input type="email" name="email" class="loginInput" id="loginEmail"> <br>
                        <small id="loginEmailMessage"></small>
                    </div>
                    <div class="loginElement">
                      <label for="loginPassword" class="labelInput fw-bold" >Password<span class="requiredStar"> *</span></label> <br>
                      <input type="password" name="password" class="loginInput " id="loginPassword"> <br>
                      <small id="loginPassMessage"></small>
                    </div>
                    <div class="d-flex justify-content-center">
                      <input value="Enter" type="submit" name="submit" id="loginSubmit"><br>
                    </div>
              </form>
            </div>
            <div class="logimMessage d-flex justify-content-center fw-bold stylesign">I Don't have an account.  <a class="loginAndsignin" href="{{ route('register') }}"> Sign Up</a></div>

        </div>
        <div class="col-lg-3"> </div>
    </div>
</div> --}}

@endsection
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/sing-login-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="../js/log.js"></script>
<script src="../js/particles.js-master/particles.js"></script>
<script src="../js/particles.js-master/demo/js/app.js"></script>

</body>
</html>
 --}}
