<?php

namespace App\Livewire\Admin\Delivery;

use App\Models\Delivery;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class AdminDeliveryList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $delivery_id;

    public function status($id)
    {
        $delivery = Delivery::findOrFail($id);
        if ($delivery->status == 0) {
            $delivery->status = 1;
        } else {
            $delivery->status = 0;
        }
        $delivery->save();
        $this->dispatch('show-result',type:'success',message:__('messages.The_changes_were_made_successfully'));
    }

    public function deleteConfirmation($id)
    {
        $this->delivery_id = $id;
        $this->dispatch('show-delete-confirmation');
    }


    #[On('deleteConfirmed')]
    public function deleteModel()
    {
        try {
            $model = Delivery::findOrFail($this->delivery_id);
            $model->delete();
            $this->dispatch('show-result', type:'success',message:__('messages.The_deletion_was_successful'));
        } catch (\Exception $ex) {
            return view('errors_custom.model_not_found');
        }
        return null;
    }

    public function render()
    {
        return view('livewire.admin.delivery.admin-delivery-list')
        ->extends('admin.layout.master_admin')
        ->section('admin_main')->with(['deliveries' => Delivery::paginate(10)]);
    }
}
