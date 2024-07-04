<?php

namespace App\Livewire\Admin\Tag;

use Livewire\Component;

class AdminTagList extends Component
{
    public function render()
    {
        return view('livewire.admin.tag.admin-tag-list')
        ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
