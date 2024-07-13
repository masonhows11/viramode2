@extends('admin.layout.master_admin')
@section('dash_page_title')
    {{ __('messages.edit_model') }}
@endsection
@section('breadcrumb')
    {{ Breadcrumbs::render('admin.create.specifications.category') }}
@endsection
@section('admin_main')
    <div class="container-fluid">

        <div class="row d-flex justify-content-start my-4 bg-white">
            <div class="col-lg-4 col-md-4 col  my-5  border-bottom title-add-to-stock">
                <div class="alert my-4">
                    <h3> {{ __('messages.product_manage_specifications_edit') }} - {{ $attribute->name }}</h3>
                </div>
            </div>
        </div>

        <div class="row bg-white rounded create-color-form">
            <form action="{{ route('admin.attribute.update') }}" method="post">
                @csrf
                <div class="col">
                    <div class="row">

                        <input type="hidden" name="attr_id" value="{{ $attribute->id }}">
                        <input type="hidden" name="category_id" value="{{ $attribute->category_id }}">

                        <div class="col-sm-6">
                            <div class="mt-3 mb-3">
                                <label for="name" class="form-label">{{ __('messages.name') }}</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $attribute->name }}">
                                @error('name')
                                <div class="mt-3">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mt-3 mb-3">
                                <label for="priority" class="form-label">{{ __('messages.priority') }}</label>
                                <input type="number" min="1" max="999" class="form-control" id="priority" name="priority" value="{{ $attribute->priority }}">
                                @error('priority')
                                <div class="mt-3">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mt-3 mb-3">
                                <label for="type" class="form-label">{{ __('messages.attribute_type') }}</label>
                                <select class="form-control" name="type" id="type">
                                    <option {{ $attribute->type == 'select' ? 'selected' : '' }} value="select">Select</option>
                                    <option {{ $attribute->type == 'multi_select' ? 'selected' : '' }} value="multi_select">Multi_select</option>
                                    <option {{ $attribute->type == 'radio' ? 'selected' : '' }} value="radio">Radio_button</option>
                                    <option {{ $attribute->type == 'text_box' ? 'selected' : '' }} value="text_box">Text</option>
                                    <option {{ $attribute->type == 'text_area' ? 'selected' : '' }} value="text_area">Text_area</option>
                                </select>
                                @error('type')
                                <div class="mt-3">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mt-3 mb-3">
                                <label for="has_default_value"
                                       class="form-label">{{ __('messages.has_default_value') }}</label>
                                <select class="form-control" name="has_default_value" id="has_default_value">
                                    <option {{  $attribute->has_default_value == 1 ? 'selected' : '' }} value="1">{{ __('messages.has_default_value') }}</option>
                                    <option  {{  $attribute->has_default_value == 0 ? 'selected' : '' }} value="0">{{ __('messages.no_default_value') }}</option>
                                </select>
                                @error('has_default_value')
                                <div class="mt-3">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <button type="submit" id="add_attribute" class="btn btn-success ">{{ __('messages.update') }}</button>
                    <a href="{{ route('admin.attribute.create',['id' => $attribute->category_id]) }}" class="btn btn-secondary">{{ __('messages.return') }}</a>
                </div>
            </form>
        </div>

    </div>
@endsection


