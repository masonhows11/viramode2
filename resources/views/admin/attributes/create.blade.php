@extends('admin.layout.master_admin')
@section('dash_page_title')
    {{ __('messages.specifications') }}
@endsection
@section('breadcrumb')
    {{ Breadcrumbs::render('admin.create.specifications.category') }}
@endsection
@section('admin_main')
    <div class="container-fluid">

        <div class="row d-flex justify-content-start my-4 bg-white">
            <div class="col-lg-4 col-md-4 col  my-5  border-bottom title-add-to-stock">
                <div class="alert my-4">
                    <h3> {{ __('messages.add_new_specification') }} - {{ $category->title_persian }}</h3>
                </div>
            </div>
        </div>

        <div class="row bg-white rounded create-color-form">
            <form action="{{ route('admin.attribute.store') }}" method="post">
                @csrf
                <div class="col">
                    <div class="row">

                        <input type="hidden" name="category_id" value="{{ $category->id }}">

                        <div class="col-sm-6">
                            <div class="mt-3 mb-3">
                                <label for="name" class="form-label">{{ __('messages.name') }}</label>
                                <input type="text" class="form-control" id="name" name="name">
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
                                <input type="number" min="1" max="999" class="form-control" id="priority"
                                       name="priority">
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
                                    <option value="">{{ __('messages.choose') }}</option>
                                    <option value="select">Select</option>
                                    <option value="multi_select">Multi_select</option>
                                    <option value="radio">Radio_button</option>
                                    <option value="text_box">Text</option>
                                    <option value="text_area">Text_area</option>
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
                                    <option value="">{{ __('messages.choose') }}</option>
                                    <option value="1">{{ __('messages.has_default_value') }}</option>
                                    <option value="0">{{ __('messages.no_default_value') }}</option>
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
                    <button type="submit" id="add_attribute" class="btn btn-success ">{{ __('messages.save') }}</button>
                    <a href="{{ route('admin.attribute.index') }}"
                       class="btn btn-secondary">{{ __('messages.return') }}</a>
                </div>
            </form>
        </div>


        <div class="row  category-list bg-white overflow-auto">
            <div class="my-5">
                <table class="table table-striped table-responsive">
                    <thead class="border-bottom-3 border-top-3">
                    <tr class="text-center">
                        <th>{{ __('messages.id') }} </th>
                        <th>{{ __('messages.name')}}</th>
                        <th>{{ __('messages.type') }}</th>
                        <th>{{ __('messages.priority') }}</th>
                        <th>{{ __('messages.has_default_value') }}</th>
                        <th>{{ __('messages.edit_model')}}</th>
                        <th>{{ __('messages.delete_model')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($attributes as $attribute)
                        <tr class="text-center">
                            <td>{{ $attribute->id }}</td>
                            <td>{{ $attribute->name }}</td>
                            <td>{{ $attribute->type }}</td>
                            <td>{{ $attribute->priority }}</td>
                            <td>{{ $attribute->has_default_value == 1 ? __('messages.has_default_value') : __('messages.no_default_value') }}</td>
                            <td>
                                <a class=" btn btn-sm btn-primary" href="{{ route('admin.attribute.edit',$attribute->id) }}">
                                    {{ __('messages.edit_model') }}
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('admin.attribute.delete',$attribute->id) }}" method="get"
                                      class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger delete-item">{{ __('messages.delete_model') }}</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

