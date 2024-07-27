@extends('admin.layout.master_admin')
@section('dash_custom_style')
{{ __('messages.page_not_found') }}
@endsection
@section('admin_main')

<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">پنل مدیریت</a></li>
            <li class="breadcrumb-item active" aria-current="page">404</li>
        </ol>
    </div>
</nav>

<div class="text-center">
    <div class="">
        <h1 class="error-title">خطای 404</h1>
        <p class="text-center">متاسفانه صفحه مورد نظر شما در سایت وجود ندارد</p>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-primary-2 btn-minwidth-lg">
            <span>بازگشت به پنل مدیریت</span>
            <i class="icon-long-arrow-left"></i>
        </a>
    </div>
</div>

<div class="admin-error-content text-center" style="background-image:url({{asset('admin_assets/images/404.png')}})"></div>

@endsection
