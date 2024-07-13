@extends('admin.layout.master_admin')
@section('dash_page_title')
    {{ __('messages.has_specifications') }}
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
                                <a class=" btn btn-sm btn-primary" href="{{ route('admin.attribute.edit',['id' => $attribute->id]) }}">
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


    {{--<div class="row d-flex justify-content-center bg-white my-4 ">
        <div class="col-lg-2 col-md-2 my-2 pt-2 pb-2 ">
            {{ $attributes->links() }}
        </div>
    </div>--}}


    <!-- list attributes edit modal -->
       {{-- @foreach($attributes as $attribute)
            <div class="modal fade" id="exampleModal-{{$attribute->id}}" tabindex="-1"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('messages.edit_model') }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <form>

                                <input type="hidden" id="attr_id-{{$attribute->id}}" name="attr_id"
                                       value="{{ $attribute->id }}">

                                <div class="mt-3 mb-3">
                                    <label for="attr-name" class="form-label">{{ __('messages.name') }}</label>
                                    <input type="text" class="form-control" id="attr-name-{{$attribute->id}}"
                                           value="{{ $attribute->name }}" name="name">
                                </div>

                                <div class="mt-3 mb-3">
                                    <label for="attr-priority" class="form-label">{{ __('messages.priority') }}</label>
                                    <input type="number" min="1" max="999" class="form-control"
                                           id="attr-priority-{{$attribute->id}}" value="{{ $attribute->priority }}"
                                           name="priority">
                                </div>

                                <div class="mt-3 mb-3">
                                    <label for="attr-type"
                                           class="form-label">{{ __('messages.attribute_type') }}</label>
                                    <select class="form-control" name=type" id="attr-type-{{$attribute->id}}">
                                        --}}{{-- <option value="">{{ __('messages.choose') }}</option>--}}{{--
                                        <option {{ $attribute->type == 'select' ? 'selected' : '' }} value="select">
                                            Select
                                        </option>
                                        <option
                                            {{ $attribute->type == 'multi_select' ? 'selected' : '' }} value="multi_select">
                                            Multi_select
                                        </option>
                                        <option {{ $attribute->type == 'radio' ? 'selected' : '' }} value="radio">
                                            Radio_button
                                        </option>
                                        <option {{ $attribute->type == 'text_box' ? 'selected' : '' }} value="text_box">
                                            Text
                                        </option>
                                        <option
                                            {{ $attribute->type == 'text_area' ? 'selected' : '' }} value="text_area">
                                            Text_area
                                        </option>
                                    </select>
                                </div>

                                <div class="mt-3 mb-3">
                                    <label for="attr-has_default_value"
                                           class="form-label">{{ __('messages.has_default_value') }}</label>
                                    <select class="form-control" name="has_default_value"
                                            id="attr-has_default_value-{{$attribute->id}}">
                                        <option
                                            {{ $attribute->has_default_value == 1 ? 'selected' : '' }} value="1">{{ __('messages.has_default_value') }}</option>
                                        <option
                                            {{ $attribute->has_default_value == 0 ? 'selected' : '' }} value="0">{{ __('messages.no_default_value') }}</option>
                                    </select>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">{{ __('messages.cancel') }}</button>
                            <button type="button" id="update_attribute-{{ $attribute->id }}"
                                    class="btn btn-primary">{{ __('messages.update') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach--}}

    </div>
@endsection
@push('dash_custom_script')
   {{-- <script>
        $(document).ready(function () {
            var attribute_list = {!! $attributes !!};
            attribute_list.map(function (attr) {
                var item_id = attr.id;
                var update_btn = `#update_attribute-${item_id}`
                $(document).on('click', update_btn, function () {
                    var name = '';//$(`#attr-name-${item_id}`).val();
                    var type = '';//$(`#attr-type-${item_id}`).val();
                    var priority = '';// $(`#attr-priority-${item_id}`).val();
                    var has_default_value = ''; // $(`#attr-has_default_value-${item_id}`).val();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: '{{ route('admin.attribute.update') }}',
                        method: 'POST',
                        datatype:'json',
                        data: {
                            id: item_id,
                            name: name,
                            type: type,
                            priority: priority,
                            has_default_value: has_default_value
                        }
                    }).done(function (data) {
                        console.log(data);
                        if (data['data'].status === 200) {
                            location.reload();
                        }
                        if (data['data'].status === 500) {
                            console.log(data);
                        }
                    }).fail(function (data) {
                        console.log(data);
                    });
                })
            })
        });
    </script>--}}
@endpush
