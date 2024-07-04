<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="direction: rtl" >

	<head><base href=""/>
		<title>@yield('admin_title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        @include('admin.layout.styles')
	</head>

	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

        <!--begin::Theme mode setup on page load-->
		{{-- <script>var defaultThemeMode = "light";
         var thememode; if ( document.documentElement ) {
             if ( document.documentElement.hasAttribute("data-bs-theme-mode"))
             { thememode = document.documentElement.getAttribute("data-bs-theme-mode"); }
              else { if ( localStorage.getitem("data-bs-theme") !== null )
              { thememode = localStorage.getitem("data-bs-theme"); }
              else { thememode = defaultThemeMode; } }
               if (thememode === "system")
               { thememode = window.matchMedia("(prefers-color-scheme: dark)").matches  "dark" : "light"; }
               document.documentElement.setAttribute("data-bs-theme", thememode); }</script> --}}
		<!--end::Theme mode setup on page load-->


		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
                @include('admin.layout.header')


				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                    @include('admin.layout.sidebar')

                    {{-- start main section --}}
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<div class="d-flex flex-column flex-column-fluid">

                            @include('admin.layout.navigate')

							<div id="kt_app_content" class="app-content flex-column-fluid">
                                <div id="kt_app_content_container" class="app-container container-xxl">
                                    @yield('admin_main')
								</div>
							</div>

						</div>
                        @include('admin.layout.footer')
					</div>
                    {{-- end main section --}}
				</div>
			</div>
		</div>


        @include('admin.layout.partials.partials')
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>

		{{-- @include('admin.layout.partials.modals') --}}
		<!--begin::Javascript-->
        @include('admin.layout.scripts')
		<!--end::Javascript-->
        @stack('admin_custom_scripts')

	</body>

</html>
