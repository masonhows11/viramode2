<?php

namespace App\Livewire\Admin\Order;

use Livewire\Component;

class AdminAllOrders extends Component
{
    public function render()
    {
        return view('livewire.admin.order.admin-all-orders')
        ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
