<div>
    @section('dash_page_title')
        دسته بندی جدید
    @endsection
    @section('breadcrumb')
        {{ Breadcrumbs::render('admin.category.create') }}
    @endsection
    <div class="container-fluid">
        <!-- creat category -->

        <form wire:submit.prevent="store">

            <div class="row  py-2 bg-white rounded">

                <div class="col-sm-4">

                    <div class="mb-3 mt-3">
                        <label for="title" class="form-label">عنوان دسته بندی به فارسی</label>
                        <input type="text" wire:model.lazy="title_persian" class="form-control" id="title">


                        @error('title_persian')
                        <div class="mt-3">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                    <div class=" mb-3 mt-3">
                        <label for="name" class="form-label">عنوان دسته بندی به انگلیسی</label>
                        <input type="text" wire:model.lazy="title_english" dir="ltr"
                               class="form-control text-left" id="name">

                        @error('title_english')
                        <div class="mt-3">
                            <span class="text-danger ">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                    <div class=" mb-3 mt-3">
                        <label for="show_in_menu" class="form-label">نمایش در منو</label>
                        <select class="form-control" wire:model.lazy="show_in_menu" id="show_in_menu">
                            <option>انتخاب کنید</option>
                            <option value="0">{{ __('messages.not_show') }}</option>
                            <option value="1">{{ __('messages.show') }}</option>
                        </select>
                        @error('show_in_menu')
                        <div class="mt-3">
                            <span class="text-danger ">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                    <div class=" mb-3 mt-3">
                        <label for="has_specifications" class="form-label">مشخصات فنی</label>
                        <select class="form-control" wire:model.lazy="has_specifications" id="has_specifications">
                            <option>انتخاب کنید</option>
                            <option value="1">{{ __('messages.has_technical_specifications') }}</option>
                            <option value="0">{{ __('messages.No_technical_specifications') }}</option>
                        </select>
                        @error('has_specifications')
                        <div class="mt-3">
                            <span class="text-danger mt-3">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="mb-3 mt-3">
                        <label for="seo_desc" class="form-label">توضیحات سئو</label>
                        <input wire:model.defer="seo_desc" type="text" dir="ltr" class="form-control"
                               id="seo_desc">
                    </div>
                    @error('seo_desc')
                    <div class="mt-3">
                        <span class="text-danger">{{ $message }}</span>
                    </div>
                    @enderror

                    <div class=" mb-3 mt-3">
                        <label for="status" class="form-label">وضعیت دسته بندی</label>
                        <select class="form-control" wire:model.lazy="status" id="status">
                            <option>انتخاب کنید</option>
                            <option value="0">{{ __('messages.deactivate') }}</option>
                            <option value="1">{{ __('messages.active') }}</option>
                        </select>

                        @error('status')
                        <div class="mt-3">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="parent" class="form-label">انتخاب دسته بندی والد</label>
                        <select class="form-control" wire:model.lazy="parent" id="parent">
                            <option value="null">فاقد دسته بندی</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->title_persian }}</option>
                            @endforeach
                        </select>
                    </div>


                    <!-- image input -->
                    <div class="mb-3 mt-3">
                        <label for="image_path" class="form-label">تصویر دسته بندی</label>
                        <input wire:loading.class="d-none" type="file" accept="image/*" class="form-control"
                               wire:model.defer="image_path" id="image_path">
                    </div>

                    <!-- image loading state -->
                    <div wire:loading wire:target="image_path" wire:loading.class="d-flex" class="">
                        <div class="spinner-border me-2" role="status" aria-hidden="true"></div>
                        <div><strong>{{ __('messages.uploading') }}</strong></div>
                    </div>


                    @error('image_path')
                    <div class="mt-3">
                        <span class="text-danger">{{ $message }}</span>
                    </div>
                    @enderror
                </div>

                <div class="col-sm-4 d-flex justify-content-center ">
                    <!-- image container -->
                    <div class="mt-7">
                        @if ($image_path)
                            <img src="{{ $image_path->temporaryUrl() }}" width="300" height="300"
                                 alt="logo_image_path" class="rounded border border-2 image-admin-preview">
                        @else
                            <img src="{{ asset('admin_assets/images/no-image-icon-23494.png') }}"
                                 width="300" height="300" alt="logo_image_path"
                                 class="rounded border border-2 image-admin-preview">
                        @endif
                    </div>
                </div>


                <div class="mb-3 mt-3">
                    <button class="btn btn-success" type="submit">
                        {{ __('messages.save') }}
                    </button>
                    <a href="{{ route('admin.category.index') }}" class="btn btn-primary">لیست دسته بندی ها</a>
                </div>

            </div>

        </form>

    </div>

</div>
@push('dash_custom_script')
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
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
