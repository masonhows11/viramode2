<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;

class ProductList extends Component
{
    public function render()
    {
        return view('livewire.admin.product.product-list')
        ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
