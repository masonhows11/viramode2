@extends('auth_front.master_auth')
@section('front_title')
    {{ __('messages.register_user') }}
@endsection
@section('main_content')
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">ثبت نام</li>
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
                            <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2"
                                role="tab" aria-controls="register-2" aria-selected="false">ثبت نام</a>
                        </li>
                    </ul>

                    <div class="">

                        <div class="tab-pane " id="register-2" role="" aria-labelledby="register-tab-2">

                            <form action="{{ route('auth.register.user') }}" method="post">
                                @csrf

                                <div class="form-group">
                                    <label for="register-email-2">آدرس ایمیل شما *</label>
                                    <input type="email" name="email" class="form-control" id="register-email-2">
                                </div>

                                @error('email')
                                    <div class="rtl">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror



                                <div class="form-group">
                                    <label for="register-password-2">رمز عبور *</label>
                                    <input type="password" name="password" class="form-control" id="register-password-2">
                                </div>

                                @error('password')
                                <div class="rtl">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror


                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="rules" class="custom-control-input" id="register-policy-2">
                                        <label class="custom-control-label" for="register-policy-2">من با <a href="#">قوانین و مقررات</a> موافقم *</label>
                                    </div>
                                </div>
                                @error('rules')
                                <div class="rtl mt-2">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror

                                <div class="form-group">
                                    @include('auth_front.inline_alert')
                                </div>

                                <div class="form-footer d-flex justify-content-center mt-5">
                                    <button type="submit" class="btn btn-outline-primary-2">
                                        <span>ثبت نام</span>
                                        <i class="icon-long-arrow-left"></i>
                                    </button>
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
                                        <a href="#" class="btn btn-login  btn-f">
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
