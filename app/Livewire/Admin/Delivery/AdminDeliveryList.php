<?php

namespace App\Livewire\Admin\Delivery;

use Livewire\Component;

class AdminDeliveryList extends Component
{
    public function render()
    {
        return view('livewire.admin.delivery.admin-delivery-list')
        ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
