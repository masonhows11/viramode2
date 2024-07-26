@extends('admin.layout.master_admin')
@section('dash_page_title')
    {{ __('messages.common_discount_list') }}
@endsection
@section('admin_main')
    <div class="container-fluid">
        <livewire:admin.discount.admin-common-discount/>
    </div>
@endsection

