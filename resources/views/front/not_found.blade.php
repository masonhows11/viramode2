@extends('front.layout.master')
@section('front_title')
{{ __('messages.page_not_found') }}
@endsection
@section('main_content')
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">خانه</a></li>
            <li class="breadcrumb-item"><a href="#">صفحات</a></li>
            <li class="breadcrumb-item active" aria-current="page">404</li>
        </ol>
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->

<div class="error-content text-center"
    style="background-image: url({{asset('front_assets/images/backgrounds/error-bg.jpg')}}) ">
    <div class="container">
        <h1 class="error-title">خطای 404</h1><!-- End .error-title -->
        <p class="text-center">متاسفانه صفحه مورد نظر شما در سایت وجود ندارد</p>
        <a href="{{ route('home') }}" class="btn btn-outline-primary-2 btn-minwidth-lg">
            <span>بازگشت به صفحه اصلی</span>
            <i class="icon-long-arrow-left"></i>
        </a>
    </div><!-- End .container -->
</div><!-- End .error-content text-center -->
@endsection
