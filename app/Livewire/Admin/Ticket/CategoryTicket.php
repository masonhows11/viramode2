<?php

namespace App\Livewire\Admin\Ticket;

use App\Models\Delivery;
use App\Models\TicketCategory;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryTicket extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $ticket_id;

    public function status($id)
    {

        $ticket = TicketCategory::findOrFail($id);
        if ($ticket->status == 0) {
            $ticket->status = 1;
        } else {
            $ticket->status = 0;
        }
        $ticket->save();
        $this->dispatch('show-result',type:'success',message:__('messages.The_changes_were_made_successfully'));
    }

    public function deleteConfirmation($id)
    {
        $this->ticket_id = $id;
        $this->dispatch('show-delete-confirmation');
    }


    #[On('deleteConfirmed')]
    public function deleteModel()
    {
        try {
            $model = TicketCategory::findOrFail($this->ticket_id);
            $model->delete();
            $this->dispatch('show-result',type:'success',message:__('messages.The_deletion_was_successful'));
        } catch (\Exception $ex) {
            return view('errors_custom.model_not_found');
        }
        return null;
    }
    public function render()
    {
        return view('livewire.admin.ticket.category-ticket')
            ->with(['categories' => TicketCategory::paginate(10)]);
    }
}
