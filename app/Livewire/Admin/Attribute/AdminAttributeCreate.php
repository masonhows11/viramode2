<?php

namespace App\Livewire\Admin\Attribute;

use Livewire\Component;

class AdminAttributeCreate extends Component
{
    public function render()
    {
        return view('livewire.admin.attribute.admin-attribute-create')
         ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
