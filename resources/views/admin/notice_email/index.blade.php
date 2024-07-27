@extends('admin.layout.master_admin')
@section('dash_page_title')
    {{ __('messages.email_notification') }}
@endsection
@section('breadcrumb')
    {{-- {{ Breadcrumbs::render('admin.delivery.create') }}--}}
@endsection
@section('admin_main')

    <livewire:admin.email-notice.admin-email-notice/>

@endsection

