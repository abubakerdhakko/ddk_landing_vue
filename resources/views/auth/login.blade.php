<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DDKOIN DPOS CRYPTO CURRENCY</title>

    <!-- Bootstrap core CSS-->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin.css" rel="stylesheet">

    <style>
        .slidefade-enter-active, .slidefade-leave-active {
            transition: all .5s ease;
            transform: translateY(0px);
        }
        .slidefade-enter, .slidefade-leave-to /* .fade-leave-active below version 2.1.8 */ {
            transition: all .5s ease;
            opacity: 0;
            transform: translateY(-50px);
        }
        a:hover{
            cursor:hand;
            cursor:pointer;
        }
    </style>
  </head>

  <body class="bg-dark body-bg">

    <div class="container">
        <div class="text-center margin-top-50">
            <a href="/"> <img src="/img/logo.png"> </a>
        </div>
        
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf
                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="email" type="email" placeholder="Enter Your Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="password" placeholder="Enter Your Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12" align="center">
                        <button type="submit" class="btn btn-primary col-md-8">
                            {{ __('Login') }}
                        </button>

                        {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                            {{--{{ __('Forgot Your Password?') }}--}}
                        {{--</a>--}}
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="/js/app.js"></script> --}}
    <script src="/js/sb-admin.min.js"></script>

  </body>

</html>