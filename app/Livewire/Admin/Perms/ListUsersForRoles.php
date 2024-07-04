<?php

namespace App\Livewire\Admin\Perms;

use Livewire\Component;

class ListUsersForRoles extends Component
{
    public function render()
    {
        return view('livewire.admin.perms.list-users-for-roles')
        ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
