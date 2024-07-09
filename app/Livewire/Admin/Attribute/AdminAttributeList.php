<?php

namespace App\Livewire\Admin\Attribute;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminAttributeList extends Component
{
    public function render()
    {
        return view('livewire.admin.attribute.admin-attribute-list')
         ->extends('admin.layout.master_admin')
        ->section('admin_main')
                ->with(['categories' => DB::table('categories')
                ->where('has_specifications', '=', 1)->orderBy('id', 'asc')
                ->paginate(10)]);
    }
}
