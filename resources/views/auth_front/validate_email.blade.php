@extends('auth_front.master_auth')
@section('front_title')
{{ __('messages.email_verification')}}
@endsection
@section('main_content')

<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">خانه</a></li>
            <li class="breadcrumb-item active" aria-current="page">تایید ایمیل کاربر</li>
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
                            aria-controls="signin-2" aria-selected="true">تایید ایمیل کاربر</a>
                    </li>
                </ul>


                <div class="">

                    <div class="tab-pane" id="velidate-user" role="" aria-labelledby="">

                        <form action="{{ route('auth.validate.user') }}" action="post">

                            @csrf
                            <div class="form-group">
                                <label for="singin-email-2">کد فعال سازی</label>
                                <input type="text" class="form-control" id="singin-email-2"  name="otp" >
                            </div>

                          
                           <input type="email"  name="email" >
                         

                            <div class="form-footer">
                                <button type="submit" class="btn btn-outline-primary-2">
                                    <span>تایید</span>
                                    <i class="icon-long-arrow-left"></i>
                                </button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
