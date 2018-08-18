<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V15</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/vendor/login/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/login/bootstrap//vendor/login/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0//vendor/login/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/login/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/login/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/login/animsition//vendor/login/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/login/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/login/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="/vendor/login/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url(/vendor/login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						@lang('admin.login')
					</span>
            </div>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

            <form method="post" action="{{ route('login') }}" class="login100-form validate-form">
                @csrf
                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">@lang('admin.email')</span>
                    <input class="input100" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                    <span class="label-input100">@lang('admin.password')</span>
                    <input class="input100" type="password" name="password" placeholder="Enter password">
                    <span class="focus-input100"></span>
                </div>

                {{--<div class="flex-sb-m w-full p-b-30">--}}
                    {{--<div class="contact100-form-checkbox">--}}
                        {{--<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">--}}
                        {{--<label class="label-checkbox100" for="ckb1">--}}
                            {{--Remember me--}}
                        {{--</label>--}}
                    {{--</div>--}}

                    {{--<div>--}}
                        {{--<a href="#" class="txt1">--}}
                            {{--Forgot Password?--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        @lang('admin.login')
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="/vendor/login/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/login/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/login/bootstrap/js/popper.js"></script>
<script src="/vendor/login/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/login/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/login/daterangepicker/moment.min.js"></script>
<script src="/vendor/login/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/vendor/login/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="/vendor/login/js/main.js"></script>

</body>
</html>