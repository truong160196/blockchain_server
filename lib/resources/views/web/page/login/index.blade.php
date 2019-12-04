@extends('layout.main')

@section('page_title')
{{--{{$page_title}}--}}
    Dashboard
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
@endsection

@section('page_content')

    <div class="limiter">
        <div class="container-login100" style="background-image: url({{asset('assets/images/bg-01.jpg')}})">
            <div class="wrap-login100">
                <form class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

                    <span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
                    <div class="login-body">
                        <div class="wrap-input100 validate-input" data-validate = "Enter username">
                            <input class="form-control input100" type="text" name="username" placeholder="Username">
                            <span class="focus-input100">
                            <i class="fas fa-user"></i>
                        </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="form-control input100" type="password" name="pass" placeholder="Password">
                            <span class="focus-input100">
                            <i class="fas fa-unlock-alt"></i>
                        </span>
                        </div>

                        <div class="form-check contact100-form-checkbox">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                <label class="label-checkbox100">Remember me</label>
                            </label>
                            {{--<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">--}}
                            {{--<label class="label-checkbox100" for="ckb1">--}}
                                {{--Remember me--}}
                            {{--</label>--}}
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>

                        <div class="text-center p-t-90">
                            <a class="txt1" href="#">
                                Forgot Password?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>
@endsection

@section('js')
    <script src="{{asset('assets/js/login.js')}}"></script>
@endsection
