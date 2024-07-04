<?php

namespace App\Livewire\Admin\Perms;

use Livewire\Component;

class ListUsersForPerms extends Component
{
    public function render()
    {
        return view('livewire.admin.perms.list-users-for-perms')
        ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
