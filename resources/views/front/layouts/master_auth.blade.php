<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('front/image/icon.png') }}">
    <title>@yield('page_title')</title>
    @include('front_end.layouts.header_styles')
</head>
<body>

    <div class="wrapper">
        <!-- Start main-content -->
        <main class="main-content dt-sl mt-4 mb-3">

            @yield('main_content')

        </main>
        <!-- End main-content -->
        @include('front_end.layouts.footer')
    </div>

@include('front_end.layouts.footer_scripts')
@include('front_end.layouts.alert.alert')
@stack('front_custom_scripts')
</body>

</html>
