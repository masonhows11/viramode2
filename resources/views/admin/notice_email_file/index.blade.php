@extends('admin.layout.master_admin')
@section('dash_page_title')
    {{ __('messages.attachment_files') }}
@endsection
@section('breadcrumb')
    {{-- {{ Breadcrumbs::render('admin.delivery.create') }}--}}
@endsection
@section('admin_main')
    <livewire:admin.email-notice-file.admin-email-file :file="$file" />
@endsection

