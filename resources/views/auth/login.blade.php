<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Offshore Personnel Management @yield('title', 'Sign In')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/ariosh_fav.ico">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

<!-- Styles -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('css/custom/sticky-footer.css') }}" rel="stylesheet">
    <link href="{{ url('css/custom/signin.css') }}" rel="stylesheet">


  
</head>
<body class="text-center mb-0 pt-0 pb-0">
    <div style="width: 100%; height: 100%;" class="black">
        <div style="width:100%;" class="row ml-0 mr-0 style" >
            <!-- <div class="col-lg-4 col-md-3"></div> -->
            <div style="position: absolute;top: 50%; left: 50%;transform: translate(-50%,-50%);padding-bottom: 50px;" class="col-lg-4 col-md-6 text-center back style-1" style="padding-bottom: 50px;"> 
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" class="form-signin mb-0 ml-auto mr-auto">
                        @csrf
                        <img class="mb-4" src="{{ url('images/uploadedwebclientlogo.jpg') }}" alt="" width="130" height="72">
                        <h1 class="h3 mb-3 font-weight-normal text-left">Sign in</h1>
                        <label for="inputEmail" class="sr-only"> <i class="far fa-envelope"></i>
                            Email address</label>
                        <input type="email" name="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} mb-4 form" placeholder="Email address" required autofocus>
                        @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password"  name="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} mb-0 form" placeholder="Password" required>
                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        <div class="row mb-2">
                            <div class="col-sm-5">
                               
                                <a style="color: #212529" class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                            <div class="col-sm-7" style="padding-top: 0.4rem">
                                <div class="checkbox mb-3">
                                    <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                    </label>
                                </div>                
                            </div>
                        </div>
                        
                        
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                        
                </form>
            </div>
            <!-- <div class="col-lg-4 col-md-3"></div> -->
            </div>
    </div>
   
    
  </body>
</html>



