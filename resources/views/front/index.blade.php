<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('front_title')</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="viramode - clothe online shop">

    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="front_assets/images/icons/browserconfig.html">
    <meta name="theme-color" content="#ffffff">

    @include('front.layout.styles')
    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:300,400,500,600,700', 'Modak:400', 'Sedgwick Ave:400', 'Carter+One:400']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'front_assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-6">

            @include('front.layout.header_top')
            <!--End .header-top-->

            @include('front.layout.header_middle')
            <!-- End .header-middle -->

            @include('front.layout.navigate')
            <!-- End .header-bottom -->
            
        </header><!-- End .header -->

        <main class="main"> 
            @include('front.layout.slider_intro')
            <!-- End .intro-slider-container -->
            @include('front.layout.slider_services')
            <!--End .owl-carousel-->

            <!-- main content -->
            <div class="container">

                <div class="banners">
                    <div class="row banner-group-1">
                        <div class="col-md-6">
                            <div class="banner banner-1 banner-overlay">
                                <a href="#">
                                    <img src="front_assets/images/demos/demo-29/banners/1.jpg" alt="Banner"
                                        width="688" height="400" style="background-color: #f9c8c8;">
                                </a>

                                <div class="banner-content banner-content-center">
                                    <h4 class="banner-subtitle text-white">فروش تابستانه</h4>
                                    <!-- End .banner-subtitle -->
                                    <h5 class="text-white">بیش از</h5>
                                    <h3 class="banner-title text-white">40% تخفیف</h3><!-- End .banner-title -->
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-sm-6 -->

                        <div class="col-md-6">
                            <div class="banner banner-2 banner-overlay">
                                <a href="#">
                                    <img src="front_assets/images/demos/demo-29/banners/2.jpg" alt="Banner"
                                        width="688" height="400" style="background-color: #b9a5bc; ">
                                </a>

                                <div class="banner-content banner-content-center">
                                    <h4 class="banner-subtitle text-white font-weight-normal">جشن تولد</h4>
                                    <!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white font-weight-normal">بهترین هدیه</h3>
                                    <!-- End .banner-title -->
                                    <h5 class="text-white">انتشار فهتگی حصولات جدید</h5>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-sm-6 -->
                    </div><!-- End .row -->

                    <div class="owl-carousel owl-theme owl-banner-group-2" data-toggle="owl"
                        data-owl-options='{
                        "dots": false,
                        "nav": false,
                        "margin": 20,
                        "rtl": true,
                            "responsive": {
                            "0": {
                                "items": 1
                            },
                            "576": {
                                "items": 2
                            },
                            "992": {
                                "items": 3
                            }
                        }
                    }'>
                        <div class="banner banner-link-anim banner-overlay">
                            <a href="#">
                                <img src="front_assets/images/demos/demo-29/banners/3.jpg" alt="Banner"
                                    width="452" height="300" style="background-color: #c0c0c2;">
                            </a>

                            <div class="banner-content banner-content-center">
                                <h3 class="banner-title text-white"><a href="#">فروشگاه مردانه</a></h3>
                                <!-- End .banner-title -->
                                <h4 class="banner-subtitle text-white"><a href="#">تی شرت و پیراهن مردانه</a>
                                </h4>
                                <!-- End .banner-subtitle -->
                                <a href="#" class="btn banner-link text-white">شروع خرید</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->

                        <div class="banner banner-link-anim banner-overlay">
                            <a href="#">
                                <img src="front_assets/images/demos/demo-29/banners/4.jpg" alt="Banner"
                                    width="452" height="300" style="background-color: #c0c0c2;">
                            </a>

                            <div class="banner-content banner-content-center">
                                <h3 class="banner-title text-white"><a href="#">فروشگاه زنانه</a></h3>
                                <!-- End .banner-title -->
                                <h4 class="banner-subtitle text-white"><a href="#">تی شرت و تاپ زنانه</a></h4>
                                <!-- End .banner-subtitle -->
                                <a href="#" class="btn banner-link text-white">شروع خرید</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->

                        <div class="banner banner-link-anim  banner-overlay">
                            <a href="#">
                                <img src="front_assets/images/demos/demo-29/banners/5.jpg" alt="Banner"
                                    width="452" height="300" style="background-color: #c0c0c2;">
                            </a>

                            <div class="banner-content banner-content-center">
                                <h3 class="banner-title text-white"><a href="#">کالکشن B&amp;W</a></h3>
                                <!-- End .banner-title -->
                                <h4 class="banner-subtitle text-white"><a href="#">انتشار هفتگی محصولات جدید</a>
                                </h4>
                                <!-- End .banner-subtitle -->
                                <a href="#" class="btn banner-link text-white">شروع خرید</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div>
                </div>
                <!--End .banners-->

                <div class="cta-newsletter text-center">
                    <span class="cta-icon"><i class="icon-envelope"></i></span>
                    <h3 class="title font-weight-semibold">با ایمیل خود ثبت نام کنید و 25% تخفیف بگیرید</h3>
                    <!-- End .title -->
                    <p class="title-desc">در خبرنامه ما عضو شوید و از آخرین محصولات و تخفیف های جدید با خبر شوید</p>
                    <!-- End .title-desc -->

                    <form action="#">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="ایمیل خود را را وارد کنید"
                                aria-label="Email Adress" aria-describedby="newsletter-btn" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" id="newsletter-btn">
                                    <span class="font-weight-semibold">عضویت</span></button>
                            </div><!-- .End .input-group-append -->
                        </div><!-- .End .input-group -->
                    </form>
                </div><!-- End .cta-newsletter -->

                <div class="heading heading-flex">
                    <div class="heading-left">
                        <h2 class="title font-weight-semibold">محصولات ویژه</h2><!-- End .title -->
                    </div><!-- End .heading-left -->

                    <div class="heading-right">
                        <a href="#" class="title-link font-weight-normal">مشاهده بیشتر <i
                                class="icon-long-arrow-left"></i></a>
                    </div><!-- End .heading-right -->
                </div><!-- End .heading -->

                <hr class="mb-3">

                <div class="products">
                    <div class="row">
                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="front_assets/images/demos/demo-29/products/1-1.jpg"
                                            alt="Product image" class="product-image"
                                            style="background-color: #ebebeb;">
                                        <img src="front_assets/images/demos/demo-29/products/1-2.jpg"
                                            alt="Product image" class="product-image-hover"
                                            style="background-color: #ebebeb;">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#"
                                            class="btn-product-icon btn-wishlist btn-expandable"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                            title="مقایسه سریع"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد
                                                خرید</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">تی شرت بلند</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">99,000 تومان</div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="front_assets/images/demos/demo-29/products/2-1.jpg"
                                            alt="Product image" class="product-image"
                                            style="background-color: #ebebeb;">
                                        <img src="front_assets/images/demos/demo-29/products/2-2.jpg"
                                            alt="Product image" class="product-image-hover"
                                            style="background-color: #ebebeb;">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#"
                                            class="btn-product-icon btn-wishlist btn-expandable"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                            title="مقایسه سریع"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد
                                                خرید</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">تی شرت ورزشی</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        45,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #d41a34;"><span
                                                class="sr-only">نام رنگ</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">نام
                                                رنگ</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="front_assets/images/demos/demo-29/products/3-1.jpg"
                                            alt="Product image" class="product-image"
                                            style="background-color: #ebebeb;">
                                        <img src="front_assets/images/demos/demo-29/products/3-2.jpg"
                                            alt="Product image" class="product-image-hover"
                                            style="background-color: #ebebeb;">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#"
                                            class="btn-product-icon btn-wishlist btn-expandable"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                            title="مقایسه سریع"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد
                                                خرید</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">تی شرت راه راه</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        170,000 تومان
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-sale">فروش ویژه</span>
                                    <a href="product.html">
                                        <img src="front_assets/images/demos/demo-29/products/4-1.jpg"
                                            alt="Product image" class="product-image"
                                            style="background-color: #ebebeb;">
                                        <img src="front_assets/images/demos/demo-29/products/4-2.jpg"
                                            alt="Product image" class="product-image-hover"
                                            style="background-color: #ebebeb;">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#"
                                            class="btn-product-icon btn-wishlist btn-expandable"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                            title="مقایسه سریع"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد
                                                خرید</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">تی شرت کتان</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">60,900 تومان</span>
                                        <span class="old-price"><del>99,000 تومان</del></span>
                                    </div><!-- End .product-price -->
                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #555;"><span
                                                class="sr-only">نام
                                                رنگ</span></a>
                                        <a href="#" style="background: #dccfc6;"><span class="sr-only">نام
                                                رنگ</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="front_assets/images/demos/demo-29/products/5-1.jpg"
                                            alt="Product image" class="product-image"
                                            style="background-color: #ebebeb;">
                                        <img src="front_assets/images/demos/demo-29/products/5-2.jpg"
                                            alt="Product image" class="product-image-hover"
                                            style="background-color: #ebebeb;">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#"
                                            class="btn-product-icon btn-wishlist btn-expandable"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                            title="مقایسه سریع"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد
                                                خرید</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">تی شرت بلند</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        170,000 تومان
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-sale">فروش ویژه</span>
                                    <a href="product.html">
                                        <img src="front_assets/images/demos/demo-29/products/6-1.jpg"
                                            alt="Product image" class="product-image"
                                            style="background-color: #ebebeb;">
                                        <img src="front_assets/images/demos/demo-29/products/6-2.jpg"
                                            alt="Product image" class="product-image-hover"
                                            style="background-color: #ebebeb;">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#"
                                            class="btn-product-icon btn-wishlist btn-expandable"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                            title="مقایسه سریع"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد
                                                خرید</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">تی شرت کتان طرح چاپی</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">120,900 تومان</span>
                                        <span class="old-price"><del>170,000 تومان</del></span>
                                    </div><!-- End .product-price -->
                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #f0a91d;"><span
                                                class="sr-only">نام رنگ</span></a>
                                        <a href="#" style="background: #efece3;"><span class="sr-only">نام
                                                رنگ</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="front_assets/images/demos/demo-29/products/7-1.jpg"
                                            alt="Product image" class="product-image"
                                            style="background-color: #ebebeb;">
                                        <img src="front_assets/images/demos/demo-29/products/7-2.jpg"
                                            alt="Product image" class="product-image-hover"
                                            style="background-color: #ebebeb;">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#"
                                            class="btn-product-icon btn-wishlist btn-expandable"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                            title="مقایسه سریع"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد
                                                خرید</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">تی شرت چاپی بزرگ</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        170,000 تومان
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="front_assets/images/demos/demo-29/products/8-1.jpg"
                                            alt="Product image" class="product-image"
                                            style="background-color: #ebebeb;">
                                        <img src="front_assets/images/demos/demo-29/products/8-2.jpg"
                                            alt="Product image" class="product-image-hover"
                                            style="background-color: #ebebeb;">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#"
                                            class="btn-product-icon btn-wishlist btn-expandable"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                            title="مقایسه سریع"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد
                                                خرید</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">تی شرت جرسی</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        49,000 تومان
                                    </div><!-- End .product-price -->
                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #666d71;"><span
                                                class="sr-only">نام رنگ</span></a>
                                        <a href="#" style="background: #3c3c3c;"><span class="sr-only">نام
                                                رنگ</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="front_assets/images/demos/demo-29/products/9-1.jpg"
                                            alt="Product image" class="product-image"
                                            style="background-color: #ebebeb;">
                                        <img src="front_assets/images/demos/demo-29/products/9-2.jpg"
                                            alt="Product image" class="product-image-hover"
                                            style="background-color: #ebebeb;">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#"
                                            class="btn-product-icon btn-wishlist btn-expandable"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                            title="مقایسه سریع"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد
                                                خرید</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">تی شرت جدید</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        146,000 تومان
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                        <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="front_assets/images/demos/demo-29/products/10-1.jpg"
                                            alt="Product image" class="product-image"
                                            style="background-color: #ebebeb;">
                                        <img src="front_assets/images/demos/demo-29/products/10-2.jpg"
                                            alt="Product image" class="product-image-hover"
                                            style="background-color: #ebebeb;">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#"
                                            class="btn-product-icon btn-wishlist btn-expandable"><span>افزودن به
                                                لیست علاقه مندی</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview"
                                            title="مقایسه سریع"><span>مشاهده سریع</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>افزودن به سبد
                                                خرید</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">تی شرت یقه باز</a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                        120,900 تومان
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .products -->

                <div class="more-container text-center mb-7">
                    <a href="blog.html" class="btn btn-outline-primary btn-more"><span
                            class="font-weight-semibold">مشاهده محصولات بیشتر</span></a>
                </div><!-- End .more-container -->

                <h2 class="title title-reviews font-weight-semibold">نظرات مشتریان فروشگاه</h2><!-- End .title -->

                <hr>

                <div class="owl-carousel owl-theme owl-reviews" data-toggle="owl"
                    data-owl-options='{
                        "dots": false,
                        "nav": true,
                        "margin": 20,
                        "rtl": true,
                            "responsive": {
                            "0": {
                                "items": 1,
                                "dots": true
                            },
                            "768": {
                                "items": 2,
                                "dots": false
                            },
                            "992": {
                                "items": 3
                            }
                        }
                    }'>
                    <div class="testimonial">
                        <div class="avatar">
                            <img src="front_assets/images/demos/demo-29/comments/1.jpg" alt="Comment image"
                                width="98" height="98">
                        </div>
                        <!--End .avatar-->

                        <div class="content">
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                            </div><!-- End .rating-container -->
                            <div class="comment-title font-weight-semibold">لورم ایپسوم متن ساختگی با سادگی</div>
                            <p class="comment">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                                تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم ...</p>
                            <div class="commenter">
                                <span class="name font-weight-normal">نسترن افشار</span>
                            </div>
                        </div>
                        <!--End .content-->
                    </div>
                    <!--End .testimonial-->

                    <div class="testimonial">
                        <div class="avatar">
                            <img src="front_assets/images/demos/demo-29/comments/2.jpg" alt="Comment image"
                                width="98" height="98" style="background-color: #b7b7b7;">
                        </div>
                        <!--End .avatar-->

                        <div class="content">
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 87.7%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                            </div><!-- End .rating-container -->
                            <div class="comment-title font-weight-semibold">تولید سادگی نامفهوم</div>
                            <p class="comment cras-comment">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم
                                متن ساختگی با تولید سادگی نامفهوم ...</p>
                            <div class="commenter">
                                <span class="name font-weight-normal">رضا کریمی</span>
                            </div>
                        </div>
                        <!--End .content-->
                    </div>
                    <!--End .testimonial-->

                    <div class="testimonial">
                        <div class="avatar">
                            <img src="front_assets/images/demos/demo-29/comments/3.jpg" alt="Comment image"
                                width="98" height="98" style="background-color: #b7b7b7;">
                        </div>
                        <!--End .avatar-->

                        <div class="content">
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                            </div><!-- End .rating-container -->
                            <div class="comment-title font-weight-semibold">متن ساختگی با تولید نامفهوم</div>
                            <p class="comment">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                                تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی ...</p>
                            <div class="commenter">
                                <span class="name font-weight-normal">پدرام شریفی</span>
                            </div>
                        </div>
                        <!--End .content-->
                    </div>
                    <!--End .testimonial-->

                    <div class="testimonial">
                        <div class="avatar">
                            <img src="front_assets/images/demos/demo-29/comments/1.jpg" alt="Comment image"
                                width="98" height="98" style="background-color: #b7b7b7;">
                        </div>
                        <!--End .avatar-->

                        <div class="content">
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                            </div><!-- End .rating-container -->
                            <div class="comment-title font-weight-semibold">لورم ایپسوم متن ساختگی ...</div>
                            <p class="comment">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی
                                با
                                تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم ...</p>
                            <div class="commenter">
                                <span class="name font-weight-normal">مریم رسولی</span>
                            </div>
                        </div>
                        <!--End .content-->
                    </div>
                    <!--End .testimonial-->
                </div>
                <!--End .owl-carousel-->

                <div class="heading heading-flex heading-blog">
                    <div class="heading-left">
                        <h2 class="title font-weight-semibold">جدیدترین اخبار</h2><!-- End .title -->
                    </div><!-- End .heading-left -->

                    <div class="heading-right">
                        <a href="#" class="title-link font-weight-normal">مشاهده بیشتر <i
                                class="icon-long-arrow-left"></i></a>
                    </div><!-- End .heading-right -->
                </div><!-- End .heading -->

                <hr class="mb-3">

                <div class="owl-carousel owl-simple owl-entry" data-toggle="owl"
                    data-owl-options='{
                        "nav": false,
                        "dots": false,
                        "items": 3,
                        "margin": 20,
                        "loop": false,
                        "rtl": true,
                            "responsive": {
                            "0": {
                                "items":1,
                                "dots": true
                            },
                            "576": {
                                "items":2,
                                "dots": true
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            }
                        }
                    }'>
                    <article class="entry">
                        <figure class="entry-media banner-overlay">
                            <a href="single.html">
                                <img src="front_assets/images/demos/demo-29/blogs/post-1.jpg" alt="image desc"
                                    style="background-color: #ccc;">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <a href="#">22 آذر 1401,</a>
                                <a href="#">0 دیدگاه</a>
                            </div><!-- End .entry-meta -->

                            <h3 class="entry-title">
                                <a href="single.html">لورم ایپسوم متن ساختگی</a>
                            </h3><!-- End .entry-title -->

                            <div class="entry-content">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی
                                نامفهوم، لورم ایپسوم
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry">
                        <figure class="entry-media banner-overlay">
                            <a href="single.html">
                                <img src="front_assets/images/demos/demo-29/blogs/post-2.jpg" alt="image desc"
                                    style="background-color: #ccc;">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <a href="#">22 آذر 1401,</a>
                                <a href="#">0 دیدگاه</a>
                            </div><!-- End .entry-meta -->

                            <h3 class="entry-title">
                                <a href="single.html">متن سادگی با تولید سادگی</a>
                            </h3><!-- End .entry-title -->

                            <div class="entry-content">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی
                                نامفهوم، متن ساختگی نامفهوم
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry">
                        <figure class="entry-media banner-overlay">
                            <a href="single.html">
                                <img src="front_assets/images/demos/demo-29/blogs/post-3.jpg" alt="image desc"
                                    style="background-color: #ccc;">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <a href="#">22 آذر 1401,</a>
                                <a href="#">0 دیدگاه</a>
                            </div><!-- End .entry-meta -->

                            <h3 class="entry-title">
                                <a href="single.html">تولید سادگی نامفهوم در صنعت چاپ</a>
                            </h3><!-- End .entry-title -->

                            <div class="entry-content">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی
                                نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    <article class="entry">
                        <figure class="entry-media banner-overlay">
                            <a href="single.html">
                                <img src="front_assets/images/demos/demo-29/blogs/post-4.jpg" alt="image desc"
                                    style="background-color: #ccc;">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <a href="#">22 آذر 1401,</a>
                                <a href="#">0 دیدگاه</a>
                            </div><!-- End .entry-meta -->

                            <h3 class="entry-title">
                                <a href="single.html">متن سادگی نامفهوم</a>
                            </h3><!-- End .entry-title -->

                            <div class="entry-content">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی
                                نامفهوم، لورم ایپسوم متن ساختگی
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .owl-carousel -->
            </div>
            <!-- end main content -->
            
        </main>
        <!--End .main-->

        @include('front.layout.footer')
       <!-- End .footer -->
    </div>

    <button id="scroll-top" title="بازگشت به بالا"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    @include('front.layout.mobile_menu')
    <!-- End .mobile-menu-container -->

  
    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>
    
                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin"
                                        role="tab" aria-controls="signin" aria-selected="true">ورود</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register"
                                        role="tab" aria-controls="register" aria-selected="false">ثبت نام</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel"
                                    aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">نام کاربری یا آدرس ایمیل *</label>
                                            <input type="text" class="form-control" id="singin-email"
                                                name="singin-email" required>
                                        </div><!-- End .form-group -->
    
                                        <div class="form-group">
                                            <label for="singin-password">رمز عبور *</label>
                                            <input type="password" class="form-control" id="singin-password"
                                                name="singin-password" required>
                                        </div><!-- End .form-group -->
    
                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>ورود</span>
                                                <i class="icon-long-arrow-left"></i>
                                            </button>
    
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">مرا به
                                                    خاطر
                                                    بسپار</label>
                                            </div><!-- End .custom-checkbox -->
    
                                            <a href="#" class="forgot-link">فراموشی رمز عبور؟</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">یا ورود با</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    حساب گوگل
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    حساب فیسبوک
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel"
                                    aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">آدرس ایمیل شما *</label>
                                            <input type="email" class="form-control" id="register-email"
                                                name="register-email" required>
                                        </div><!-- End .form-group -->
    
                                        <div class="form-group">
                                            <label for="register-password">رمز عبور *</label>
                                            <input type="password" class="form-control" id="register-password"
                                                name="register-password" required>
                                        </div><!-- End .form-group -->
    
                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>ثبت نام</span>
                                                <i class="icon-long-arrow-left"></i>
                                            </button>
    
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">با
                                                    <a href="#">قوانین و مقررات </a>موافقم *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">یا عضویت با</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    حساب گوگل
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    حساب فیسبوک
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div>
    <!-- End .modal -->

    {{-- <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="front_assets/images/popup/newsletter/logo.png" class="logo" alt="logo" width="60"
                                height="15">
                            <h2 class="banner-title">دریافت <span>25<light>%</light></span> تخفیف</h2>
                            <p>با عضویت در خبرنامه فروشگاه ما، یک تخفیف 25 درصدی دریافت کنید و از جدیدترین تخفیف ها مطلع
                                شوید</p>
                            <form action="#">
                                <div class="input-group input-group-round">
                                    <input type="email" class="form-control form-control-white" placeholder="ایمیل شما"
                                        aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><span>تایید</span></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                <label class="custom-control-label" for="register-policy-2">این پنجره را دوباره
                                    نشان نده</label>
                            </div><!-- End .custom-checkbox -->
                        </div>
                    </div>
                    <div class="col-xl-2-5col col-lg-5 ">
                        <img src="front_assets/images/popup/newsletter/img-1.jpg" class="newsletter-img" alt="newsletter">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    @include('front.layout.scripts')

</body>


<!-- Mirrored from filenter.ir/molla/index-29.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jun 2024 20:10:42 GMT -->

</html>
