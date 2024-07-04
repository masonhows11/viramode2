<?php

namespace App\Livewire\Admin\Attribute;

use Livewire\Component;

class AdminAttributeValue extends Component
{
    public function render()
    {
        return view('livewire.admin.attribute.admin-attribute-value') 
        ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
