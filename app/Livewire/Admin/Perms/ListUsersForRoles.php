<?php

namespace App\Livewire\Admin\Perms;

use App\Models\Admin;
use Livewire\Component;
use Livewire\WithPagination;

class ListUsersForRoles extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.perms.list-users-for-roles')
            ->extends('admin.layout.master_admin')
            ->section('admin_main')
            ->with(['users' => Admin::paginate(5)]);
    }
}
