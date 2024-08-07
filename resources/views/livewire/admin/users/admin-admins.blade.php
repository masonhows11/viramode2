<div>
    @section('dash_page_title')
        مدیریت مدیران
    @endsection
    @section('breadcrumb')
        {{ Breadcrumbs::render('admin.admins') }}
    @endsection
        <div class="container-fluid">

            <div class="row d-flex justify-content-start my-4 bg-white">
                <div class="col-lg-4 col-md-4 col  my-5  border-bottom title-add-to-stock">
                    <div class="alert my-4">
                        <h3> {{ __('messages.admins_management') }}</h3>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center search-category-section">
                <div class="col">
                    <div class="mb-3 mt-3">
                        <input wire:model.live.debounce.500ms="search" placeholder="{{ __('messages.search') }}" type="text" class="form-control" id="search">
                    </div>
                </div>
            </div>

            <div class="row admin-list-users bg-white overflow-auto">
                <div class="my-5">
                    <table class="table table-striped">
                        <thead>
                        <tr class="text-center">
                            <th>{{ __('messages.id') }}</th>
                            <th>{{ __('messages.user_name') }}</th>
                            <th>{{ __('messages.email')}}</th>
                            <th>{{ __('messages.status') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @isset($admins)
                            @foreach($admins as $admin)

                                <tr class="text-center">
                                    <td>
                                        <div>{{ $admin->id }}</div>
                                    </td>
                                    <td>
                                        <div>{{ $admin->name }}</div>
                                    </td>
                                    <td>
                                        <div>{{ $admin->email ? $admin->email : null}}</div>
                                    </td>
                                    @if($admin->hasRole('admin'))
                                        <td>
                                            <div class="custom-deactivate">
                                                دسترسی ندارید
                                            </div>
                                        </td>
                                        {{-- <td>
                                            <div class="custom-deactivate">
                                                دسترسی ندارید
                                            </div>
                                        </td> --}}
                                    @else
                                        {{-- <td>
                                            <div>
                                                <a href="javascript:void(0)"
                                                   class="btn btn-sm btn-danger"
                                                   wire:click.prevent="deleteConfirmation({{ $admin->id }})">
                                                    {{ __('messages.delete_model') }}
                                                </a>
                                            </div>
                                        </td> --}}
                                        <td>
                                            <div class="rounded btn btn-sm
                                        {{ $admin->email_verified_at == null ? 'btn-danger' : 'btn-success' }}">
                                                {{ $admin->email_verified_at == null ? __('messages.deactivate') : __('messages.active') }}
                                            </div>
                                        </td>
                                    @endif
                                </tr>

                            @endforeach
                        @endisset
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row d-flex justify-content-center bg-white my-4 ">
                <div class="d-flex justify-content-center col-lg-4 col-md-4 my-2 pt-2 pb-2">
                    {{ $admins->links() }}
                </div>
            </div>

        </div>
</div>
