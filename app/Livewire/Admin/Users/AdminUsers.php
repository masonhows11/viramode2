<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class AdminUsers extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $delete_id;
    public $search = '';
    public $stateUser = true;

    public function activeUser($id)
    {
        $user = User::find($id);
        if ($user->activate == 0) {
            $user->activate = 1;
            $user->save();
            $this->stateUser = true;
        } else {
            $user->activate = 0;
            $user->save();
            $this->stateUser = false;
        }
    }

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatch('show-delete-confirmation');
    }


    #[On('deleteConfirmed')]
    public function deleteUser()
    {
        try {
            User::destroy($this->delete_id);
            $this->dispatch('show-result', type:'success',message:'رکورد با موفقیت حذف شد');
//            $this->dispatch('show-result',
//                ['type' => 'success',
//                    'message' => 'رکورد با موفقیت حذف شد']);
        } catch (\Exception $ex) {
            return view('errors_custom.model_not_found');
        }
        return  null;
    }

    public function render()
    {
        return view('livewire.admin.users.admin-users')
        ->extends('admin.layout.master_admin')
        ->section('admin_main')
            ->with(['users' => User::where('name','like','%'.$this->search.'%')
                ->orWhere('first_name','like','%'.$this->search.'%')
                ->orWhere('email','like','%'.$this->search.'%')->orderBy('id','asc')->paginate(8)]);
    }
}
