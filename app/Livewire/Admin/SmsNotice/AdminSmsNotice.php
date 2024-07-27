<?php

namespace App\Livewire\Admin\SmsNotice;

use App\Models\PublicSms;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class AdminSmsNotice extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $sms_id;

    public function status($id)
    {
        $sms = PublicSms::findOrFail($id);
        if ($sms->status == 0) {
            $sms->status = 1;
        } else {
            $sms->status = 0;
        }
        $sms->save();
        $this->dispatch('show-result', type:'success',message:__('messages.The_changes_were_made_successfully'));
    }

    public function deleteConfirmation($id)
    {
        $this->sms_id = $id;
        $this->dispatch('show-delete-confirmation');
    }


    #[On('deleteConfirmed')]
    public function deleteModel()
    {
        try {
            $model = PublicSms::findOrFail($this->sms_id);
            $model->delete();
            $this->dispatch('show-result',type:'success',message:__('messages.The_deletion_was_successful'));
        } catch (\Exception $ex) {
            return view('errors_custom.model_not_found');
        }
        return null;
    }
    public function render()
    {
        return view('livewire.admin.sms-notice.admin-sms-notice')
            ->with(['notices' => PublicSms::paginate(5)]);
    }
}
