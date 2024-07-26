@extends('admin.layout.master_admin')
@section('dash_page_title')
    {{ __('messages.coupon_discount_list') }}
@endsection
@section('admin_main')
    <div class="container-fluid">

        <livewire:admin.discount.admin-coupon-discount/>

    </div>
@endsection


