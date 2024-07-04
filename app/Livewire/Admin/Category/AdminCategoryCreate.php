<?php

namespace App\Livewire\Admin\Category;

use Livewire\Component;

class AdminCategoryCreate extends Component
{
    public function render()
    {
        return view('livewire.admin.category.admin-category-create') 
        ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
