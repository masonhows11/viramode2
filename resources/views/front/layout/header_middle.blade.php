<div class="header-middle">
    <div class="container">
        <div class="header-left">
            <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                <form action="#" method="get">
                    <div class="header-search-wrapper search-wrapper-wide">
                        <label for="q" class="sr-only">جستجو</label>
                        <button class="btn btn-primary" type="submit"><i
                                class="icon-search"></i></button>
                        <input type="search" class="form-control" name="q" id="q"
                            placeholder="جستجوی محصول ..." required>
                    </div><!-- End .header-search-wrapper -->
                </form>
            </div><!-- End .header-search -->
        </div>
        <!--End .header-left-->

        <div class="header-center">
            <a href="{{ route('home') }}" class="logo">
                <h4>انلاین شاپ</h4>
                {{-- <img src="#" alt="shop Logo" width="82"
                    height="20"> --}}
            </a>
            <!--End .logo-->
        </div><!-- End .header-left -->

        <div class="header-right">
            <a href="wishlist.html" class="wishlist-link">
                <i class="icon-heart-o"></i>
                <span class="wishlist-count">3</span>
                <span class="wishlist-txt">علاقه مندی</span>
            </a>
            <!--End .wishlist-link-->

            <div class="dropdown cart-dropdown">
                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" data-display="static">
                    <i class="icon-shopping-cart"></i>
                    <span class="cart-count">2</span>
                    <span class="cart-txt font-weight-semibold">164,000 تومان</span>
                </a>
                <!--End .dropdown-toggle-->

                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-cart-products">
                        <div class="product">
                            <div class="product-cart-details">
                                <h4 class="product-title">
                                    <a href="product.html">تی شرت هودی بلند</a>
                                </h4>
                                <!--End .product-title-->

                                <span class="cart-product-info">
                                    <span class="cart-product-qty">1 x </span>
                                    170,000 تومان
                                </span>
                                <!--End .cart-product-info-->
                            </div><!-- End .product-cart-details -->

                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="{{ asset('front_assets/images/demos/demo-29/products/5-1.jpg') }}"
                                        alt="product" width="60" height="60">
                                </a>
                            </figure>
                            <!--End .product-image-container-->

                            <a href="#" class="btn-remove" title="حذف محصول"><i
                                    class="icon-close"></i></a>
                        </div><!-- End .product -->

                        <div class="product">
                            <div class="product-cart-details">
                                <h4 class="product-title">
                                    <a href="product.html">تی شرت تک سایز صورتی</a>
                                </h4>
                                <!--End .product-title-->

                                <span class="cart-product-info">
                                    <span class="cart-product-qty">1 x </span>
                                    120,980 تومان
                                </span>
                                <!--End .cart-product-info-->
                            </div><!-- End .product-cart-details -->

                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="{{  asset('front_assets/images/demos/demo-29/products/10-1.jpg') }}"
                                        alt="product" width="60" height="60">
                                </a>
                            </figure>
                            <!--End .product-image-container-->

                            <a href="#" class="btn-remove" title="حذف محصول"><i
                                    class="icon-close"></i></a>
                        </div><!-- End .product -->
                    </div><!-- End .dropdown-cart-product -->

                    <div class="dropdown-cart-total">
                        <span>مجموع</span>
                        <span class="cart-total-price">290,980 تومان</span>
                    </div><!-- End .dropdown-cart-total -->

                    <div class="dropdown-cart-action">
                        <a href="cart.html" class="btn btn-primary">مشاهده سبد خرید</a>
                        <a href="checkout.html" class="btn btn-outline-primary-2"><span>پرداخت</span><i
                                class="icon-long-arrow-left"></i></a>
                    </div><!-- End .dropdown-cart-action -->
                </div><!-- End .dropdown-menu -->
            </div><!-- End .cart-dropdown -->
        </div>
        <!--End .header-right-->
    </div><!-- End .container -->
</div>
