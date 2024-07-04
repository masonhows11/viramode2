<?php

namespace App\Livewire\Admin\Perms;

use Livewire\Component;

class AdminRoles extends Component
{
    public function render()
    {
        return view('livewire.admin.perms.admin-roles')
        ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
