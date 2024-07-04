<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
    <!--begin::Header container-->
    <div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
        <!--begin::Sidebar mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="مشاهده">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
        </div>
        <!--end::Sidebar mobile toggle-->
        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="{{ route('admin.dashboard') }}" class="d-lg-none">
                <h4 class="h4 ">{{ __('messages.admin_dashboard') }}</h4>
                {{-- <img alt="Logo" src="{{ asset('admin_assets/media/logos/default-small.svg') }}" class="h-30px" /> --}}
            </a>
        </div>
        <!--end::Mobile logo-->
        <!--begin::Header wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
            <!--begin::Menu wrapper-->
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                <!--begin::Menu-->
                <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">

                    <!--begin:Menu item-->
                    {{-- <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-end" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <span class="menu-title">داشبورد ها</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                            <!--begin:داشبورد ها menu-->
                            <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible" data-kt-menu-dismiss="true">
                                <!--begin:Row-->
                                <div class="row">
                                    <!--begin:Col-->
                                    <div class="col-lg-8 mb-3 mb-lg-0 py-3 px-3 py-lg-6 px-lg-6">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/index.html" class="menu-link active">
                                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                            <i class="ki-duotone ki-element-11 text-primary fs-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </span>
                                                        <span class="d-flex flex-column">
                                                            <span class="fs-6 fw-bold text-gray-800">پیش فرض</span>
                                                            <span class="fs-7 fw-semibold text-muted">گزارشات و آمارها</span>
                                                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/ecommerce.html" class="menu-link">
                                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                            <i class="ki-duotone ki-basket text-danger fs-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </span>
                                                        <span class="d-flex flex-column">
                                                            <span class="fs-6 fw-bold text-gray-800">تجارت</span>
                                                            <span class="fs-7 fw-semibold text-muted">فروش گزارشات</span>
                                                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/projects.html" class="menu-link">
                                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                            <i class="ki-duotone ki-abstract-44 text-info fs-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                        <span class="d-flex flex-column">
                                                            <span class="fs-6 fw-bold text-gray-800">پروژه ها</span>
                                                            <span class="fs-7 fw-semibold text-muted">گراف ها و نمودارها</span>
                                                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/online-courses.html" class="menu-link">
                                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                            <i class="ki-duotone ki-color-swatch text-success fs-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                                <span class="path5"></span>
                                                                <span class="path6"></span>
                                                                <span class="path7"></span>
                                                                <span class="path8"></span>
                                                                <span class="path9"></span>
                                                                <span class="path10"></span>
                                                                <span class="path11"></span>
                                                                <span class="path12"></span>
                                                                <span class="path13"></span>
                                                                <span class="path14"></span>
                                                                <span class="path15"></span>
                                                                <span class="path16"></span>
                                                                <span class="path17"></span>
                                                                <span class="path18"></span>
                                                                <span class="path19"></span>
                                                                <span class="path20"></span>
                                                                <span class="path21"></span>
                                                            </i>
                                                        </span>
                                                        <span class="d-flex flex-column">
                                                            <span class="fs-6 fw-bold text-gray-800">آنلاین دوره ها</span>
                                                            <span class="fs-7 fw-semibold text-muted">پیشرفت دانش آموز</span>
                                                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/marketing.html" class="menu-link">
                                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                            <i class="ki-duotone ki-chart-simple text-dark fs-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </span>
                                                        <span class="d-flex flex-column">
                                                            <span class="fs-6 fw-bold text-gray-800">بازاریابی</span>
                                                            <span class="fs-7 fw-semibold text-muted">کمپین ها و تبدیل ها</span>
                                                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/bidding.html" class="menu-link">
                                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                            <i class="ki-duotone ki-switch text-warning fs-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                        <span class="d-flex flex-column">
                                                            <span class="fs-6 fw-bold text-gray-800">مناقصه</span>
                                                            <span class="fs-7 fw-semibold text-muted">کمپین ها و تبدیل ها</span>
                                                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/pos.html" class="menu-link">
                                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                            <i class="ki-duotone ki-abstract-42 text-danger fs-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                        <span class="d-flex flex-column">
                                                            <span class="fs-6 fw-bold text-gray-800">سیستم پوز</span>
                                                            <span class="fs-7 fw-semibold text-muted">کمپین ها و تبدیل ها</span>
                                                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../demo1/dist/dashboards/call-center.html" class="menu-link">
                                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                            <i class="ki-duotone ki-call text-primary fs-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                                <span class="path5"></span>
                                                                <span class="path6"></span>
                                                                <span class="path7"></span>
                                                                <span class="path8"></span>
                                                            </i>
                                                        </span>
                                                        <span class="d-flex flex-column">
                                                            <span class="fs-6 fw-bold text-gray-800">مرکز تماس</span>
                                                            <span class="fs-7 fw-semibold text-muted">کمپین ها و تبدیل ها</span>
                                                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                        <div class="separator separator-dashed mx-5 my-5"></div>
                                        <!--begin:صفحه فرود-->
                                        <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
                                            <div class="d-flex flex-column me-5">
                                                <div class="fs-6 fw-bold text-gray-800">صفحه فرود</div>
                                                <div class="fs-7 fw-semibold text-muted">الگوی فرود صفحه با قیمت و موارد دیگر</div>
                                            </div>
                                            <a href="../../demo1/dist/landing.html" class="btn btn-sm btn-primary fw-bold">کاوش کنید</a>
                                        </div>
                                        <!--end:صفحه فرود-->
                                    </div>
                                    <!--end:Col-->
                                    <!--begin:Col-->
                                    <div class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
                                        <!--begin:Heading-->
                                        <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">بیشتر داشبورد ها</h4>
                                        <!--end:Heading-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="../../demo1/dist/dashboards/logistics.html" class="menu-link py-2">
                                                <span class="menu-title">جابجایی</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="../../demo1/dist/dashboards/website-analytics.html" class="menu-link py-2">
                                                <span class="menu-title">وب سایت آنالیتیکس</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="../../demo1/dist/dashboards/finance-performance.html" class="menu-link py-2">
                                                <span class="menu-title">دارایی، مالیه، سرمایه گذاری کارایی</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="../../demo1/dist/dashboards/store-analytics.html" class="menu-link py-2">
                                                <span class="menu-title">آنالیتیکس</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="../../demo1/dist/dashboards/social.html" class="menu-link py-2">
                                                <span class="menu-title">سوشیال</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="../../demo1/dist/dashboards/delivery.html" class="menu-link py-2">
                                                <span class="menu-title">تحویل</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="../../demo1/dist/dashboards/crypto.html" class="menu-link py-2">
                                                <span class="menu-title">کریپتو</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="../../demo1/dist/dashboards/school.html" class="menu-link py-2">
                                                <span class="menu-title">مدرسه</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="../../demo1/dist/dashboards/podcast.html" class="menu-link py-2">
                                                <span class="menu-title">پادکست</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Col-->
                                </div>
                                <!--end:Row-->
                            </div>
                            <!--end:داشبورد ها menu-->
                        </div>
                        <!--end:Menu sub-->
                    </div> --}}
                    <!--end:Menu item-->


                </div>
                <!--end::Menu-->
            </div>
            <!--end::Menu wrapper-->

            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">

                <!--begin::جستجو-->
                @include('admin.layout.partials.search_box')
                <!--end::جستجو-->

                <!--begin::فعالیتها-->
                <div class="app-navbar-item ms-1 ms-md-4">
                    <!--begin::کشو toggle-->
                    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" id="kt_activities_toggle">
                        <i class="ki-duotone ki-messages fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                        </i>
                    </div>
                    <!--end::کشو toggle-->
                </div>
                <!--end::فعالیتها-->

                <!--begin::اعلان ها-->
                <div class="app-navbar-item ms-1 ms-md-4">
                    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
                        <i class="ki-duotone ki-notification-status fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </div>
                    @include('admin.layout.partials.notifications')
                </div>
                <!--end::اعلان ها-->


                <!--begin::چت-->
                <div class="app-navbar-item ms-1 ms-md-4">
                    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px position-relative" id="kt_drawer_chat_toggle">
                        <i class="ki-duotone ki-message-text-2 fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                        <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                    </div>
                </div>
                <!--end::چت-->

                <!--begin::من apps links-->
                {{-- @include('admin.layout.partials.my_app') --}}
                <!--end::من apps links-->

                <!--begin::کاربر menu-->
                @include('admin.layout.partials.profile_menu')
                <!--end::کاربر menu-->


                <div class="app-navbar-item d-lg-none ms-2 me-n2" title="مشاهده header menu">
                    <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
                        <i class="ki-duotone ki-element-4 fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>


            </div>

        </div>

    </div>

</div>
