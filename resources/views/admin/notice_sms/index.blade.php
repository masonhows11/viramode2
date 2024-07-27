@extends('admin.layout.master_admin')
@section('dash_page_title')
    {{ __('messages.sms_notification') }}
@endsection
@section('breadcrumb')
    {{-- {{ Breadcrumbs::render('admin.delivery.create') }}--}}
@endsection
@section('admin_main')

    <livewire:admin.sms-notice.admin-sms-notice/>

@endsection


