@extends('admin.layout.master_admin')
@section('dash_page_title')
    {{ __('messages.amazing_sales_list') }}
@endsection
@section('admin_main')
    <div class="container-fluid">

        <livewire:admin.discount.admin-amazing-sale/>

    </div>
@endsection


