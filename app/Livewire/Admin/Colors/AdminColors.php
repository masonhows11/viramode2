<?php

namespace App\Livewire\Admin\Colors;

use App\Models\Color;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class AdminColors extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $color_id;
    public $edit_mode = false;
    public $title_persian;
    public $title_english;
    public $color_code;
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $rules = [
        'title_persian' => ['required', 'min:3', 'max:30'],
        'title_english' => ['required', 'min:3', 'max:30'],
        'color_code' => ['required']
    ];

    public function save()
    {
        $this->validate();
        try {
            if ($this->edit_mode == false) {
                Color::create([
                    'title_persian' => $this->title_persian,
                    'title_english' => $this->title_english,
                    'code' => $this->color_code,
                ]);
                $this->title_english = '';
                $this->title_persian = '';
                $this->color_code = '';
                $this->dispatch('show-result', type:'success', message:__('messages.New_record_saved_successfully'));
            } elseif ($this->edit_mode == true) {
                Color::where('id',$this->color_id)
                    ->update(['title_persian' => $this->title_persian,
                        'title_english' => $this->title_english,
                        'code'=>$this->color_code]);
                $this->title_english = '';
                $this->title_persian = '';
                $this->color_code = '';
                $this->edit_mode = false;
                $this->dispatch('show-result', type:'success', message: __('messages.The_update_was_completed_successfully'));
            }

        } catch (\Exception $ex) {
            return view('errors_custom.model_store_error');
        }
        return null;
    }

    public function edit($id)
    {
        $this->color_id = $id;
        try {
            $color = Color::findOrFail($id);
            $this->title_persian = $color->title_persian;
            $this->title_english = $color->title_english;
            $this->color_code = $color->code;
            $this->edit_mode = true;
        } catch (\Exception $ex) {
            return view('errors_custom.model_not_found');
        }
        return null;

    }

    public function deleteConfirmation($id)
    {
        $this->color_id = $id;
        $this->dispatch('show-delete-confirmation');
    }


    #[On('deleteConfirmed')]
    public function deleteModel()
    {
        try {
            $model = Color::findOrFail($this->color_id);
            $model->delete();
            $this->dispatch('show-result', type:'success',message:'رکورد با موفقیت حذف شد');
        } catch (\Exception $ex) {
            return view('errors_custom.model_not_found');
        }
        return null;
    }
    public function render()
    {
        return view('livewire.admin.colors.admin-colors')
        ->extends('admin.layout.master_admin')
        ->section('admin_main')->with('colors', Color::where('code','like','%'.$this->search.'%')
                ->OrWhere('title_english','like','%'.$this->search.'%')->orWhere('title_persian','like','%'.$this->search.'%')->paginate(10));
    }
}
