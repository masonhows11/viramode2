@extends('admin.layout.master_admin')
@section('dash_page_title')
    {{ __('messages.product_specifications_values') }}
@endsection
@section('breadcrumb')
{{--    {{ Breadcrumbs::render('admin.create.specification.values',$category->title_persian) }}--}}
@endsection
@section('admin_main')
    <div class="container-fluid">

        <div class="row d-flex justify-content-start my-4 bg-white">
            <div class="col-lg-4 col-md-4 col  my-5  border-bottom title-add-to-stock">
                <div class="alert my-4">
                    <h3> {{ __('messages.product_manage_specifications_value_edit') }} - {{ $value->attribute->name }}</h3>
                </div>
            </div>
        </div>

        <div class="row bg-white rounded create-color-form">
            <form action="{{ route('admin.attribute.value.update') }}" method="post">
                @csrf
                <div class="col">
                    <div class="row">

                        <input type="hidden" name="attribute_value_id" value="{{ $value->id }}">
                        <input type="hidden" name="attribute" value="{{ $value->attribute_id }}">
                        <input type="hidden" name="category_id" value="{{ $category_id  }}">

                        <div class="col-sm-4">
                            <div class="mt-3 mb-3">
                                <label for="value" class="form-label">{{ __('messages.value') }}</label>
                                <input type="text" class="form-control" id="value" name="value" value="{{ $value->value }}">
                                @error('value')
                                <div class="mt-3">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="mt-3 mb-3">
                                <label for="priority" class="form-label">{{ __('messages.priority') }}</label>
                                <input type="number" min="1" max="999" class="form-control" id="priority" name="priority"
                                       value="{{ $value->priority }}">
                                @error('priority')
                                <div class="mt-3">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <button type="submit" id="add_attribute" class="btn btn-success ">{{ __('messages.save') }}</button>
                    <a href="{{ route('admin.attribute.value.create',['id' => $category_id ]) }}" class="btn btn-secondary">{{ __('messages.return') }}</a>
                </div>
            </form>
        </div>


    </div>
@endsection


