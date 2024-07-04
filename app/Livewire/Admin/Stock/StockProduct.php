<?php

namespace App\Livewire\Admin\Stock;

use Livewire\Component;

class StockProduct extends Component
{
    public function render()
    {
        return view('livewire.admin.stock.stock-product')
        ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
