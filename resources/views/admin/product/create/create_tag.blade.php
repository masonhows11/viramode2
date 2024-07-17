@extends('admin.layout.master_admin')
@section('dash_page_title')
    {{ __('messages.product_tags') }}
@endsection
@section('admin_main')
    <div class="container-fluid">
        <livewire:admin.create-product.create-product-tag :product_id="$product_id"/>
    </div>
@endsection
