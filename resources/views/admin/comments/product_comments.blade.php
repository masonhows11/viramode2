@extends('admin.layout.master_admin')
@section('dash_page_title')
    لیست نظرات  {{ $product->title_persian  }}
@endsection
@section('admin_main')
    <div class="container-fluid product-list-comment-section">
        <livewire:admin.comment.admin-comment :product="$product_id"/>
    </div>
@endsection
