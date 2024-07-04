<?php

namespace App\Livewire\Admin\Brand;

use Livewire\Component;

class AdminBrandList extends Component
{
    public function render()
    {
        return view('livewire.admin.brand.admin-brand-list') 
        ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
