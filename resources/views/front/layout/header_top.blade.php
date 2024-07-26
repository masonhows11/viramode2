<div class="header-top">
    <div class="container">
        <div class="header-left">
            <a href="{{ route('contact_us') }}"><i class="icon-phone"></i>تلفن تماس : 09172890423</a>
        </div><!-- End .header-left -->

        <div class="header-right">
            <div class="social-icons social-icons-color">
                <a href="javascript:void(0)" class="social-icon social-facebook" title="فیسبوک" target="_blank"><i
                        class="fab fa-facebook-f"></i></a>
                <a href="javascript:void(0)" class="social-icon social-twitter" title="توییتر" target="_blank"><i
                        class="fab fa-twitter"></i></a>
                <a href="javascript:void(0)" class="social-icon social-instagram" title="پینترست" target="_blank"><i
                        class="fab fa-instagram"></i></a>
                <a href="javascript:void(0)" class="social-icon social-pinterest" title="اینستاگرام" target="_blank"><i
                        class="fab fa-pinterest-p"></i></a>
            </div>
            <!--End .social-icons-->

            <ul class="top-menu top-link-menu">
                <li>
                    <a href="javascript:void(0)">لینک ها<i class="icon-angle-down"></i></a>
                    <ul>
                        @guest
                        <li class="login d-flex ">
                            <a href="{{ route('auth.login.form') }}" class="ml-4" ><i class="icon-user"></i>ورود</a>
                            <a href="{{ route('auth.register.form') }}" >ثبت نام</a>
                        </li>
                        @endguest
                        @auth

                        <li class="login d-flex">
                            <a href="{{ route('user.profile') }}" class="ml-4" ><i class="icon-user"></i>{{ auth()->user()->name ?? __('messages.dear_user') }}</a>
                        </li>
                        <li class="login d-flex">
                            <a href="{{ route('auth.log.out') }}" class="ml-1" ><i class="fa fa-sign-out"></i>{{ __('messages.logout') }}</a>
                        </li>

                        @endauth



                        <li class="header-dropdown">
                            <a href="javascript:void(0)">تومان</a>
                            <ul class="header-menu">
                                <li><a href="javascript:void(0)">دلار</a></li>
                                <li><a href="javascript:void(0)">تومان</a></li>
                            </ul><!-- End .header-menu -->
                        </li>
                        <!--End .header-dropdown-->

                        <li class="header-dropdown">
                            <a href="javascript:void(0)">فارسی</a>
                            <ul class="header-menu">
                                <li><a href="javascript:void(0)">انگلیسی</a></li>
                            </ul>
                            <!-- End .header-menu -->
                        </li>
                        <!--End .header-dropdown-->
                    </ul>
                    <!--End ul-->
                </li>
            </ul><!-- End .top-menu -->
        </div><!-- End .header-right -->
    </div>
    <!--End .container-->
</div>
