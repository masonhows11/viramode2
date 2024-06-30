<div class="header-bottom sticky-header">
    <div class="container">
        <div class="header-left">
            <nav class="main-nav">
                <ul class="menu sf-arrows">
                    <li class="megamenu-container active">
                        <a href="{{ route('home') }}" >{{ __('messages.home') }}</a>
                    </li>

                    <li>
                        <a href="category.html" class="sf-with-ul">{{ __('messages.categories') }}</a>

                        <div class="megamenu megamenu-md">
                            <div class="row no-gutters">
                                <div class="col-md-8">
                                    <div class="menu-col">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="menu-title">فروشگاه با سایدبار</div>
                                                <!-- End .menu-title -->
                                                <ul>
                                                    <li><a href="category-list.html">فروشگاه لیست</a></li>
                                                    <li><a href="category-2cols.html">فروشگاه 2 ستونه</a>
                                                    </li>
                                                    <li><a href="category.html">فروشگاه 3 ستونه</a></li>
                                                    <li><a href="category-4cols.html">فروشگاه 4 ستونه</a>
                                                    </li>
                                                    <li><a href="category-market.html"><span>فروشگاه
                                                                بازار<span
                                                                    class="tip tip-new">جدید</span></span></a>
                                                    </li>
                                                </ul>

                                                <div class="menu-title">فروشگاه بدون سایدبار</div>
                                                <!-- End .menu-title -->
                                                <ul>
                                                    <li><a href="category-boxed.html"><span>فروشگاه با حالت
                                                                باکس<span
                                                                    class="tip tip-hot">ویژه</span></span></a>
                                                    </li>
                                                    <li><a href="category-fullwidth.html">فروشگاه تمام
                                                            صفحه</a></li>
                                                </ul>
                                            </div><!-- End .col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="menu-title">دسته بندی محصولات</div>
                                                <!-- End .menu-title -->
                                                <ul>
                                                    <li><a href="product-category-boxed.html">دسته بندی
                                                            محصولات با حالت باکس</a></li>
                                                    <li><a href="product-category-fullwidth.html"><span>دسته
                                                                بندی محصولات تمام صفحه<span
                                                                    class="tip tip-new">جدید</span></span></a>
                                                    </li>
                                                </ul>
                                                <div class="menu-title">صفحات فروشگاه</div>
                                                <!-- End .menu-title -->
                                                <ul>
                                                    <li><a href="cart.html">سبد خرید</a></li>
                                                    <li><a href="cart2.html">سبد خرید 2</a></li>
                                                    <li><a href="cart-empty.html">سبد خرید خالی</a></li>
                                                    <li><a href="checkout.html">پرداخت</a></li>
                                                    <li><a href="checkout2.html">پرداخت 2</a></li>
                                                    <li><a href="compare.html">مقایسه محصولات</a></li>
                                                    <li><a href="compare2.html">مقایسه محصولات 2</a></li>
                                                    <li><a href="wishlist.html">لیست علاقه مندی ها</a></li>
                                                    <li><a href="gift-cart.html">کارت هدیه</a></li>
                                                    <li><a href="dashboard.html">داشبورد</a></li>

                                                </ul>
                                            </div><!-- End .col-md-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .menu-col -->
                                </div><!-- End .col-md-8 -->

                                <div class="col-md-4">
                                    <div class="banner banner-overlay">
                                        <a href="category.html" class="banner banner-menu">
                                            <img src="{{  asset('front_assets/images/menu/banner-1.jpg') }}"
                                                alt="Banner">

                                            <div class="banner-content banner-content-top">
                                                <div class="banner-title text-white">آخرین
                                                    <br>شانس<br><span><strong>فروش</strong></span>
                                                </div>
                                                <!-- End .banner-title -->
                                            </div><!-- End .banner-content -->
                                        </a>
                                        <!--End .banner banner-menu-->
                                    </div><!-- End .banner banner-overlay -->
                                </div><!-- End .col-md-4 -->
                            </div><!-- End .row -->
                        </div><!-- End .megamenu megamenu-md -->
                    </li>

                    {{-- <li>
                        <a href="product.html" class="sf-with-ul">محصول</a>

                        <div class="megamenu megamenu-sm">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="menu-col">
                                        <div class="menu-title">جزئیات محصول</div>
                                        <!-- End .menu-title -->
                                        <ul>
                                            <li><a href="product.html">پیش فرض</a></li>
                                            <li><a href="product-centered.html">توضیحات وسط چین</a></li>
                                            <li><a href="product-extended.html"><span>توضیحات گسترده<span
                                                            class="tip tip-new">جدید</span></span></a></li>
                                            <li><a href="product-gallery.html">گالری</a></li>
                                            <li><a href="product-sticky.html">اطلاعات چسبیده</a></li>
                                            <li><a href="product-sidebar.html">صفحه جمع با سایدبار</a></li>
                                            <li><a href="product-fullwidth.html">تمام عرض</a></li>
                                            <li><a href="product-masonry.html">اطلاعات چسبیده ماسونری</a>
                                            </li>
                                            <li><a href="product-new-design.html">طراحی جدید</a></li>
                                        </ul>
                                    </div><!-- End .menu-col -->
                                </div><!-- End .col-md-6 -->

                                <div class="col-md-6">
                                    <div class="banner banner-overlay">
                                        <a href="category.html">
                                            <img src="front_assets/images/menu/banner-2.jpg"
                                                alt="Banner">

                                            <div class="banner-content banner-content-bottom">
                                                <div class="banner-title text-white">محصولات
                                                    جدید<br><span><strong>بهار 1401</strong></span>
                                                </div><!-- End .banner-title -->
                                            </div><!-- End .banner-content -->
                                        </a>
                                    </div><!-- End .banner -->
                                </div><!-- End .col-md-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .megamenu megamenu-sm -->
                    </li> --}}

                    <li>
                        <a href="#" class="sf-with-ul">صفحات </a>
                        <ul>
                            <li> <a href="{{ route('about_us') }}" >درباره ما</a></li>
                            <li><a href="{{ route('contact_us') }}">تماس با ما</a></li>
                            <li><a href="#">پیگیری سفارش</a></li>
                            <li><a href="#">سوالات متداول</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="sf-with-ul">اخبار</a>
                        <ul>
                            <li><a href="#">کلاسیک</a></li>
                            <li><a href="#">لیست</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('about_us') }}" >درباره ما</a>
                    </li>
                    <li>
                        <a href="{{ route('contact_us') }}">تماس با ما</a>
                    </li>
                </ul><!-- End .menu -->
            </nav><!-- End .main-nav -->

            <button class="mobile-menu-toggler">
                <span class="sr-only">فهرست</span>
                <i class="icon-bars"></i>
            </button>
            <!--End .mobile-menu-toggler-->
        </div><!-- End .header-left -->

        <div class="header-right">
            <i class="icon-medapps"></i>
            <p class="font-weight-semibold text-secondary">خرید تا 30 درصد تخفیف</p>
        </div>
        <!--End .header-right-->
    </div><!-- End .container -->
</div>
