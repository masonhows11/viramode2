<?php

namespace App\Livewire\Admin\Perms;

use Livewire\Component;

class AdminPerms extends Component
{
    public function render()
    {
        return view('livewire.admin.perms.admin-perms')
        ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
