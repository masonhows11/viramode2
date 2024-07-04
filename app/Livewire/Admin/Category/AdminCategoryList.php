<?php

namespace App\Livewire\Admin\Category;

use Livewire\Component;

class AdminCategoryList extends Component
{
    public function render()
    {
        return view('livewire.admin.category.admin-category-list')
         ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
