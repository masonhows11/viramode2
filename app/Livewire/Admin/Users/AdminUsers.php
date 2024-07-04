<?php

namespace App\Livewire\Admin\Users;

use Livewire\Component;

class AdminUsers extends Component
{
    public function render()
    {
        return view('livewire.admin.users.admin-users')
        ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
