<?php

namespace App\Livewire\Admin\Attribute;

use Livewire\Component;

class AdminAttributeValueCreate extends Component
{
    public function render()
    {
        return view('livewire.admin.attribute.admin-attribute-value-create')
         ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
