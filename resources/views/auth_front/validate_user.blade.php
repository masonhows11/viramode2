@extends('auth_front.master_auth')
@section('front_title')
    {{ __('messages.email_verification') }}
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

                            <form action="{{ route('auth.validate.user') }}" method="post">

                                @csrf
                                <div class="form-group">
                                    <label for="singin-email-2">کد تایید را وارد کنید</label>
                                    <input type="text" class="form-control" id="singin-email-2" name="otp">
                                </div>
                                @error('otp')
                                <div class="rtl">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror





                                @if( session()->has('auth_email') )
                                    <input type="hidden" name="email" value="{{ session()->get('auth_email') }}">
                                @endif

                                <div class="form-group text-center d-none" id="resend-otp">
                                    @if( session()->has('token') )
                                        <a href="{{ route('auth.resend.token',['token' => session()->get('token')]) }}"
                                           id="resend-token"
                                           class="text-info text-decoration-none">{{ __('messages.resend_active_code_message') }}</a>
                                    @endif
                                </div>

                                <div class="form-group text-center" id="timer-otp">
                                </div>


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

@push('front_custom_scripts')

    @if (session()->has('token_time'))
        @php
            $token = session()->get('token_time');
            $timer = ((new \Carbon\Carbon($token))->addMinutes(2)->timestamp - \Carbon\Carbon::now()->timestamp) * 1000;
        @endphp
        <script>
            let countDown = new Date().getTime() + {{ $timer }};
            let timer = $('#timer-otp');
            let resendOtp = $('#resend-otp');
            let x = setInterval(function() {
                let now = new Date().getTime();
                let distance = countDown - now;
                let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                let second = Math.floor((distance % (1000 * 60)) / (1000));
                let tr_resend_code = '{{ __('messages.resend_active_code') }}';
                let tr_minutes = '{{ __('messages.and_minute') }}';
                let tr_second = '{{ __('messages.and_seconds') }}';
                if (minutes === 0) {
                    timer.html(tr_resend_code + second + tr_second)
                } else {
                    timer.html(tr_resend_code + minutes + tr_minutes + second + tr_second)
                }
                if (distance < 0) {
                    clearInterval(x);
                    timer.addClass('d-none')
                    resendOtp.removeClass('d-none');
                }
            }, 1000)
        </script>
    @endif

@endpush
