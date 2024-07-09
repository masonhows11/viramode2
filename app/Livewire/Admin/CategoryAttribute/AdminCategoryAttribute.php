<?php

namespace App\Livewire\Admin\CategoryAttribute;

use App\Models\Category;
use App\Models\CategoryAttribute;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoryAttribute extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $attr_id;
    public $edit_mode = false;
    public $title;
    public $unit;
    public $type;
    public $category_id;
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $rules = [
        'title' => ['required', 'min:2', 'max:30', 'string'],
        'unit' => ['required', 'min:2', 'max:30', 'string'],
        'type' => ['required'],
        'category_id' => ['required']
    ];

    protected $messages = [
        'category_id.required' => 'فیلد دسته بندی الزامی است',
        'unit.required' => 'فیلد واحد اندازه گیری الزامی است',
    ];

    public function save()
    {
        $this->validate();
        try {
            if ($this->edit_mode == false) {
                CategoryAttribute::create([
                    'title' => $this->title,
                    'unit' => $this->unit,
                    'category_id' => $this->category_id,
                ]);
                $this->title = '';
                $this->unit = '';
                $this->category_id = '';
                $this->dispatch('show-result', type:'success',message:__('messages.New_record_saved_successfully'));
            } elseif ($this->edit_mode == true) {
                CategoryAttribute::where('id', $this->attr_id)
                    ->update(['title' => $this->title,
                        'unit' => $this->unit,
                        'category_id' => $this->category_id]);
                $this->title = '';
                $this->unit = '';
                $this->category_id = '';
                $this->dispatch('show-result',type:'success', message:__('messages.The_update_was_completed_successfully'));
            }
        } catch (\Exception $ex) {
            return view('errors_custom.model_store_error');
        }
        return null;
    }

    public function edit($id)
    {
        $this->attr_id = $id;
        try {
            $attr = CategoryAttribute::findOrFail($id);
            $this->title = $attr->title;
            $this->unit = $attr->unit;
            $this->category_id = $attr->category_id;
            $this->edit_mode = true;

        } catch (\Exception $ex) {
            return view('errors_custom.model_not_found');
        }
        return null;
    }

    public function deleteConfirmation($id)
    {
        $this->attr_id = $id;
        $this->dispatch('show-delete-confirmation');
    }


    #[On('deleteConfirmed')]
    public function deleteModel()
    {
        try {
            $model = CategoryAttribute::findOrFail($this->attr_id);
            $model->delete();
            $this->dispatch('show-result',type:'success',message:__('messages.The_deletion_was_successful'));
        } catch (\Exception $ex) {
            return view('errors_custom.model_not_found');
        }
        return null;
    }
    public function render()
    {
        return view('livewire.admin.category-attribute.admin-category-attribute')
         ->extends('admin.layout.master_admin')
        ->section('admin_main')->with(['attributes' => CategoryAttribute::paginate(10),
                'categories' => Category::all()]);
    }
}
