
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head><base href="">
    <meta charset="utf-8" />
    <title>Login|HR Management</title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{asset('assets/admin/global/css/login-4.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <link href="{{asset('assets/admin/global/css/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/global/css/style.bundle.min.css')}}" rel="stylesheet" type="text/css" />


    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
        <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url({{asset('assets//admin/img.png')}});">
            <div class="login-form text-center p-7 position-relative overflow-hidden" style="border: 2px solid #edf2f8; border-radius: 10px;">
                <!--begin::Login Header-->
                <div class="d-flex flex-center mb-15">
                    <a href="#">
                        <h1>MIS</h1>
                    </a>
                </div>
                <!--end::Login Header-->
                <!--begin::Login Sign in form-->
                <div class="login-signin">
                    <div class="mb-20">
                        <h3>Sign In To Admin</h3>
                        <div class="text-muted font-weight-bold">Enter your details to login to your account:</div>
                    </div>
                    <form class="form" id="kt_login_signin_form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-5">
                            <input class="form-control h-auto form-control-solid py-4 px-8 @error('email') is-invalid @enderror" type="text" placeholder="Email" name="email" value="{{ old('email') }}" autocomplete="email" autofocus />
                            @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group mb-5">
                            <input class="form-control h-auto form-control-solid py-4 px-8 @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="current-password"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                            <div class="checkbox-inline">
                                <label class="checkbox m-0 text-muted">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                                    <span></span>Remember me</label>
                            </div>
                        </div>
                        <button id="kt_login_signin_submit" type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Log In</button>
                    </form>
                </div>
                <!--end::Login Sign in form-->
                <!--begin::Login Sign up form-->
                <div class="login-signup">
                    <div class="mb-20">
                        <h3>Sign Up</h3>
                        <div class="text-muted font-weight-bold">Enter your details to create your account</div>
                    </div>
                    <form class="form" id="kt_login_signup_form">
                        <div class="form-group mb-5">
                            <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Fullname" name="fullname" />
                        </div>
                        <div class="form-group mb-5">
                            <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
                        </div>
                        <div class="form-group mb-5">
                            <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Password" name="password" />
                        </div>
                        <div class="form-group mb-5">
                            <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Confirm Password" name="cpassword" />
                        </div>
                        <div class="form-group mb-5 text-left">
                            <div class="checkbox-inline">
                                <label class="checkbox m-0">
                                    <input type="checkbox" name="agree" />
                                    <span></span>I Agree the
                                    <a href="#" class="font-weight-bold ml-1">terms and conditions</a>.</label>
                            </div>
                            <div class="form-text text-muted text-center"></div>
                        </div>
                        <div class="form-group d-flex flex-wrap flex-center mt-10">
                            <button id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Sign Up</button>
                            <button id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
</body>
<!--end::Body-->
</html>
