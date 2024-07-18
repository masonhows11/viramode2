@extends('admin.layout.master_admin')
@section('dash_page_title')
    {{ __('messages.product_manage_specifications') }}
@endsection
@section('admin_main')
    <div class="container-fluid">

        <livewire:admin.create-product.create-product-specifications :product="$product"/>

    </div>
@endsection
