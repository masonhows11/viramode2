<?php

namespace App\Livewire\Admin\Brand;

use Livewire\Component;

class AdminEditBrand extends Component
{
    public function render()
    {
        return view('livewire.admin.brand.admin-edit-brand')
         ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
