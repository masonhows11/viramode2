<?php

namespace App\Livewire\Admin\CategoryAttribute;

use Livewire\Component;

class AdminCategoryAttributeValue extends Component
{
    public function render()
    {
        return view('livewire.admin.category-attribute.admin-category-attribute-value') 
        ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
