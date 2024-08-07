@extends('admin.layout.master_admin')
@section('dash_page_title')
    {{ __('messages.roles_assignment') }}
@endsection
@section('breadcrumb')
   {{ Breadcrumbs::render('admin.roles.assign') }}
@endsection
@section('admin_main')

    <div class="container-fluid">

        <div class="row d-flex justify-content-start my-4 bg-white">
            <div class="col-lg-4 col-md-4 col  my-5  border-bottom title-add-to-stock">
                <div class="alert my-4">
                    <h3>{{ __('messages.roles_assignment') }}</h3>
                </div>
            </div>
        </div>

        <div class="row bg-white  admin-role-assign-form">
            <div class="my-4">
                <form action="{{ route('admin.roles.assign') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="row">
                        <div class="mb-3 mt-3">
                            <label for="user" class="form-label">نام کاربری :</label>
                            <input type="text" class="form-control" value="{{ $user->name }}" readonly id="user">
                        </div>
                    </div>
                    <label for="role-name" class="form-label me-5">نام نقش :</label>
                    @foreach( $roles as $role)
                        <div class="form-check my-5 form-check-inline">
                            <label class="form-check-label">{{ $role->name }}</label>
                            <input class="form-check-input" name="roles[]" type="checkbox" id="form-check-input{{ $role->id }}"
                                   {{ in_array( $role->id,$user->roles->pluck('id')->toArray()) ? 'checked' : '' }}
                                   value="{{ $role->id }}">
                        </div>
                    @endforeach
                    <div class="mb-3 mt-3  d-flex">

                        {{-- <button type="submit" class="btn btn-success">{{ __('messages.save') }}</button> --}}
                        <div>
                            <button class="btn btn-success" type="submit" id="login-btn" >

                                <span class="indicator-label" id="login-text-element">
                                    {{ __('messages.save') }}
                                </span>

                                <span class="spinner-border spinner-border-sm d-none" id="spinnder-element"   role="status" aria-hidden="true"></span>
                                <span class="d-none" id="spinnder-text">{{ __('messages.saving') }}</span>


                              </button>
                        </div>

                        <div class="ms-4">
                            <a href="{{ route('admin.role.list.users') }}" class="btn btn-secondary">{{ __('messages.return') }}</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
@push('dash_custom_script')

    <script>
        $(document).ready(function() {
            $("#login-btn").click(function() {
                $("#login-text-element").addClass('d-none');
                $("#spinnder-element").removeClass('d-none');
                $("#spinnder-text").removeClass('d-none');
            });
        });
    </script>

    @if(session()->has('success'))
        <script>
           const Toast = Swal.mixin({
                toast: true,
                position: 'top',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: '{!! session()->get('success') !!}'
            })

        </script>
    @endif

@endpush

