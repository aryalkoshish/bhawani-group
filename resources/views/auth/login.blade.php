@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{url('public/cd-admin/login/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public/cd-admin/login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public/cd-admin/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public/cd-admin/login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public/cd-admin/login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{url('public/cd-admin/login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public/cd-admin/login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public/cd-admin/login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{url('public/cd-admin/login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('public/cd-admin/login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/cd-admin/login/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
    
    
    <div class="container-login100" style="background-image: url('public/cd-admin/login/images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form"  method="POST" action="{{ route('login')}}" >
                @csrf
                <span class="login100-form-title p-b-37">
                    Sign In
                </span>

                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <span class="focus-input100" ></span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <!-- <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="pass">
                        <span class="focus-input100" data-placeholder="Password"></span> -->
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                

                
            </form>

            
        </div>
    </div>
    
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="{{url('public/cd-admin/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{url('public/cd-admin/login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{url('public/cd-admin/login/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{url('public/cd-admin/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{url('public/cd-admin/login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{url('public/cd-admin/login/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{url('public/cd-admin/login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{url('public/cd-admin/login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{url('public/cd-admin/login/js/main.js')}}"></script>



@endsection
