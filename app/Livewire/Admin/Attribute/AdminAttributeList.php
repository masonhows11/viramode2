<?php

namespace App\Livewire\Admin\Attribute;

use Livewire\Component;

class AdminAttributeList extends Component
{
    public function render()
    {
        return view('livewire.admin.attribute.admin-attribute-list')
         ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
