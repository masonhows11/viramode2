@extends('auth_front.master_auth')
@section('front_title')
{{ __('messages.login_user')}}
@endsection
@section('main_content')

<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">خانه</a></li>
            <li class="breadcrumb-item active" aria-current="page">ورود</li>
        </ol>
    </div>
</nav>

<div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17"
    style="background-image: url('assets/images/backgrounds/login-bg.jpg')">
    <div class="container">
        <div class="form-box">
            <div class="form-tab">

                <ul class="nav nav-pills nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab"
                            aria-controls="signin-2" aria-selected="true">ورود</a>
                    </li>
                </ul>

                <div class="">
                    <div class="tab-pane" id="" role="" aria-labelledby="">

                        <form action="{{ route('auth.login.user') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="singin-email-2">نام کاربری یا آدرس ایمیل *</label>
                                <input type="text" name="email" class="form-control" id="singin-email-2" required>
                            </div>

                            <div class="form-group">
                                <label for="singin-password-2">رمز عبور *</label>
                                <input type="password" class="form-control" id="singin-password-2" name="password" required>
                            </div>

                            <div class="form-footer">
                                <button type="submit" class="btn btn-outline-primary-2">
                                    <span>ورود</span>
                                    <i class="icon-long-arrow-left"></i>
                                </button>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input"   id="signin-remember-2">
                                    <label class="custom-control-label" for="signin-remember-2">مرا به خاطر بسپار</label>
                                </div>

                                <a href="#" class="forgot-link">رمز عبور خود را فراموش کرده اید؟</a>

                            </div>
                        </form>

                        <div class="form-choice">
                            <p class="text-center">یا ورود با </p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-login btn-g">
                                        <i class="icon-google"></i>
                                        حساب کاربری گوگل
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-login btn-f">
                                        <i class="icon-facebook-f"></i>
                                        حساب کاربری فیسبوک
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
