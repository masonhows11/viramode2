@extends('auth_front.master_auth')
@section('front_title')
@endsection
@section('main_content')

<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index-1.html">خانه</a></li>
            <li class="breadcrumb-item"><a href="#">صفحات</a></li>
            <li class="breadcrumb-item active" aria-current="page">ورود / ثبت نام</li>
        </ol>
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->

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
                    <li class="nav-item">
                        <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2"
                            role="tab" aria-controls="register-2" aria-selected="false">ثبت نام</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">
                        <form action="#">
                            <div class="form-group">
                                <label for="singin-email-2">نام کاربری یا آدرس ایمیل *</label>
                                <input type="text" class="form-control" id="singin-email-2"
                                    name="singin-email" required>
                            </div><!-- End .form-group -->

                            <div class="form-group">
                                <label for="singin-password-2">رمز عبور *</label>
                                <input type="password" class="form-control" id="singin-password-2"
                                    name="singin-password" required>
                            </div><!-- End .form-group -->

                            <div class="form-footer">
                                <button type="submit" class="btn btn-outline-primary-2">
                                    <span>ورود</span>
                                    <i class="icon-long-arrow-left"></i>
                                </button>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                        id="signin-remember-2">
                                    <label class="custom-control-label" for="signin-remember-2">مرا به خاطر
                                        بسپار</label>
                                </div><!-- End .custom-checkbox -->

                                <a href="#" class="forgot-link">رمز عبور خود را فراموش کرده اید؟</a>
                            </div><!-- End .form-footer -->
                        </form>
                        <div class="form-choice">
                            <p class="text-center">یا ورود با </p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-login btn-g">
                                        <i class="icon-google"></i>
                                        حساب کاربری گوگل
                                    </a>
                                </div><!-- End .col-6 -->
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-login btn-f">
                                        <i class="icon-facebook-f"></i>
                                        حساب کاربری فیسبوک
                                    </a>
                                </div><!-- End .col-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .form-choice -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane fade show active" id="register-2" role="tabpanel"
                        aria-labelledby="register-tab-2">
                        <form action="#">
                            <div class="form-group">
                                <label for="register-email-2">آدرس ایمیل شما *</label>
                                <input type="email" class="form-control" id="register-email-2"
                                    name="register-email" required>
                            </div><!-- End .form-group -->

                            <div class="form-group">
                                <label for="register-password-2">رمز عبور *</label>
                                <input type="password" class="form-control" id="register-password-2"
                                    name="register-password" required>
                            </div><!-- End .form-group -->

                            <div class="form-footer">
                                <button type="submit" class="btn btn-outline-primary-2">
                                    <span>ثبت نام</span>
                                    <i class="icon-long-arrow-left"></i>
                                </button>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                        id="register-policy-2" required>
                                    <label class="custom-control-label" for="register-policy-2">من با <a
                                            href="#">قوانین و مقررات</a> موافقم *</label>
                                </div><!-- End .custom-checkbox -->
                            </div><!-- End .form-footer -->
                        </form>
                        <div class="form-choice">
                            <p class="text-center">یا ورود با </p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-login btn-g">
                                        <i class="icon-google"></i>
                                        حساب کاربری گوگل
                                    </a>
                                </div><!-- End .col-6 -->
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-login  btn-f">
                                        <i class="icon-facebook-f"></i>
                                        حساب کاربری فیسبوک
                                    </a>
                                </div><!-- End .col-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .form-choice -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .form-tab -->
        </div><!-- End .form-box -->
    </div><!-- End .container -->
</div><!-- End .login-page section-bg -->

@endsection
