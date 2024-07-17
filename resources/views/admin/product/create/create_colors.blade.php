@extends('admin.layout.master_admin')
@section('dash_page_title')
    {{ __('messages.product_colors') }}
@endsection
@section('admin_main')
    <div class="container-fluid">

        <livewire:admin.create-product.create-product-default-color :product="$product"/>

        <livewire:admin.create-product.create-product-color :product="$product"/>

    </div>
@endsection



