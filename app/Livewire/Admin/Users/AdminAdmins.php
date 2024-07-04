<?php

namespace App\Livewire\Admin\Users;

use Livewire\Component;

class AdminAdmins extends Component
{
    public function render()
    {
        return view('livewire.admin.users.admin-admins')
        ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
