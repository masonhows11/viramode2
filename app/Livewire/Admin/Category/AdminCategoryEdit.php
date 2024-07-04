<?php

namespace App\Livewire\Admin\Category;

use Livewire\Component;

class AdminCategoryEdit extends Component
{
    public function render()
    {
        return view('livewire.admin.category.admin-category-edit')
        ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
