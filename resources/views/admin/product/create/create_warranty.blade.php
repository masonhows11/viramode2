@extends('admin.layout.master_admin')
@section('dash_page_title')
    {{ __('messages.warranty_management') }}
@endsection
@section('admin_main')
    <div class="container-fluid">

        <livewire:admin.create-product.create-product-warranty :product="$product"/>

    </div>
@endsection
