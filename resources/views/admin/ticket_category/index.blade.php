@extends('admin.layout.master_admin')
@section('dash_page_title')
    {{ __('messages.category_tickets') }}
@endsection
@section('breadcrumb')
    {{-- {{ Breadcrumbs::render('') }}--}}
@endsection
@section('admin_main')
    <div class="container-fluid">

        <livewire:admin.ticket.category-ticket/>

    </div>
@endsection


