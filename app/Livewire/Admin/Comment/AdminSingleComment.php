<?php

namespace App\Livewire\Admin\Comment;

use Livewire\Component;

class AdminSingleComment extends Component
{
    public function render()
    {
        return view('livewire.admin.comment.admin-single-comment')
         ->extends('admin.layout.master_admin')
        ->section('admin_main');
    }
}
