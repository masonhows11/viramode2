<div>
    @section('dash_page_title')
        {{ __('messages.price_variables_management') }}
    @endsection
    @section('breadcrumb')
        {{ Breadcrumbs::render('admin.create.category.attribute') }}
    @endsection
    <div class="container-fluid category-attribute-section">

        <div class="row bg-white rounded category-attribute-form">

            <form wire:submit.prevent="save">
                <div class="col">
                    <div class="row">

                        <div class="col-sm-3">
                            <div class="mt-3 mb-3">
                                <label for="title" class="form-label">{{ __('messages.title') }}</label>
                                <input type="text" class="form-control" id="title" wire:model.defer="title">
                                @error('title')
                                <div class="mt-3">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mt-3 mb-3">
                                <label for="title_english" class="form-label">{{ __('messages.unit') }}</label>
                                <input type="text" class="form-control" id="title_english" wire:model.defer="unit">
                                @error('unit')
                                <div class="mt-3">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mt-3 mb-3">
                                <label for="type" class="form-label">{{ __('messages.type') }}</label>
                                <select wire:model.defer="type" id="type" class="form-select">
                                    <option value="">{{ __('messages.choose') }}</option>
                                    <option value="0">{{ __('messages.select') }}</option>
                                    <option value="1">{{ __('messages.radio') }}</option>
                                </select>
                                @error('type')
                                <div class="mt-3">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="mt-3 mt-3">
                                <label for="category_id" class="form-label">{{ __('messages.category') }}</label>
                                <select wire:model.defer="category_id" id="category_id" class="form-select">
                                    <option value="">{{ __('messages.choose') }}</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title_persian }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="mt-3">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <button type="submit" id="add_attribute"
                            class="btn btn-success btn-sm">{{ __('messages.save') }}</button>
                </div>
            </form>
        </div>


        <div class="row category-attribute mt-5 bg-white overflow-auto">
            <div class="my-5">
                <table class="table table-striped">
                    <thead class="border-bottom-3 border-top-3">
                    <tr class="text-center">
                        <th class="model-field">{{ __('messages.id') }}</th>
                        <th>{{ __('messages.title') }}</th>
                        <th class="model-field">{{ __('messages.unit') }}</th>
                        <th class="model-field">{{ __('messages.type') }}</th>
                        <th class="model-field">{{ __('messages.category') }}</th>
                        <th>{{ __('messages.attribute_value') }}</th>
                        <th>{{ __('messages.operation') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($attributes as $attribute)
                        <tr class="text-center">
                            <td class="model-field">{{ $attribute->id }}</td>
                            <td>{{ $attribute->title }}</td>
                            <td class="model-field">{{ $attribute->unit }}</td>
                            <td class="model-field">{{ $attribute->type == 0 ? __('messages.select') : __('messages.radio') }}</td>
                            <td class="model-field">{{ $attribute->category->title_persian }}</td>
                            <td><a class="mt-3"
                                   href="{{ route('admin.category.attribute.value.index',['attribute'=>$attribute->id]) }}">{{ __('messages.attribute_value') }}</a>
                            </td>
                            <td>
                                <a class="mt-3" href="javascript:void(0)" wire:click.edit="edit({{$attribute->id}})"><i
                                        class="mt-3 fa fa-edit"></i></a>
                                <a class="mt-3" href="javascript:void(0)"
                                   wire:click.prevent="deleteConfirmation({{ $attribute->id }})"><i
                                        class="mt-3 fa fa-trash"></i></a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-2 col-md-2">
                {{ $attributes->links() }}
            </div>
        </div>


    </div>
</div>
@push('dash_custom_script')
    <script type="text/javascript">
        document.addEventListener('show-delete-confirmation', event => {
            Swal.fire({
                title: 'آیا مطمئن هستید این ایتم حذف شود؟',
                icon: 'error',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'بله حذف کن!',
                cancelButtonText: 'خیر',
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('deleteConfirmed')
                }
            });
        })
    </script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            showCloseButton: true,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        document.addEventListener('show-result', ({detail: {type, message}}) => {
            Toast.fire({
                icon: type,
                title: message
            })
        })
        @if (session()->has('warning'))
        Toast.fire({
            icon: 'warning',
            title: '{{ session()->get('warning') }}'
        })
        @endif
        @if (session()->has('success'))
        Toast.fire({
            icon: 'success',
            title: '{{ session()->get('success') }}'
        })
        @endif
    </script>
@endpush

