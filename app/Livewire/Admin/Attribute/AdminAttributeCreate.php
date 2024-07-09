<?php

namespace App\Livewire\Admin\Attribute;

use App\Models\Attribute;
use App\Models\Category;
use Livewire\Attributes\On;
use Livewire\Component;

class AdminAttributeCreate extends Component
{

    public $category;
    public $category_name;
    public $category_id;
    public $attribute_id;
    public $edit_mode = false;

    public $name;
    public $type;
    public $priority;
    public $has_default_value;

    public function mount($id)
    {

        $this->category_id = $id;
        $this->category = Category::where('id', $this->category_id)->select('title_persian')->first();
        $this->category_name = $this->category->title_persian;

    }

    public function rules()
    {
        return [
            'name' => 'required', 'min:2', 'max:30',
            'type' => 'required',
            'priority' => 'required', 'numeric', 'gt:0', 'lt:999',
            'has_default_value' => 'required'
        ];
    }


    public function save()
    {
        $this->validate();
        try {
            if ($this->edit_mode == false) {
                Attribute::create([
                    'name' => $this->name,
                    'type' => $this->type,
                    'priority' => $this->priority,
                    'category_id' => $this->category_id,
                    'has_default_value' => $this->has_default_value,
                ]);
                $this->name = '';
                $this->type = '';
                $this->priority = '';
                $this->has_default_value = '';
                $this->dispatch('show-result', type: 'success', message: __('messages.New_record_saved_successfully'));

            } elseif ($this->edit_mode == true) {
                Attribute::where('id', $this->attribute_id)
                    ->update(['name' => $this->name,
                        'type' => $this->type,
                        'priority' => $this->priority,
                        'has_default_value' => $this->has_default_value]);

                $this->name = '';
                $this->type = '';
                $this->priority = '';
                $this->has_default_value = '';
                $this->edit_mode = false;

                $this->dispatch('show-result', type: 'success', message: __('messages.The_update_was_completed_successfully'));
            }
        } catch (\Exception $ex) {
            return view('errors_custom.model_store_error');
        }
        return null;
    }

    public function edit($id)
    {

        $this->attribute_id = $id;
        try {
            $attribute = Attribute::findOrFail($id);
            $this->name = $attribute->name;
            $this->type = $attribute->type;
            $this->priority = $attribute->priority;
            $this->has_default_value = $attribute->has_default_value;
            $this->edit_mode = true;
        } catch (\Exception $ex) {
            return view('errors_custom.model_not_found');
        }
        return null;

    }

    public function resetInput()
    {
        $this->name = '';
        $this->type = '';
        $this->priority = '';
        $this->has_default_value = '';
        $this->edit_mode = false;
    }

    public function deleteConfirmation($id)
    {
        $this->attribute_id = $id;
        $this->dispatch('show-delete-confirmation');
    }

    #[On('deleteConfirmed')]
    public function deleteModel()
    {
        try {
            $model = Attribute::findOrFail($this->attribute_id);
            $model->delete();
            $this->dispatch('show-result', type: 'success', message: __('messages.The_deletion_was_successful'));
        } catch (\Exception $ex) {
            return view('errors_custom.model_not_found');
        }
        return null;
    }

    public function render()
    {
        return view('livewire.admin.attribute.admin-attribute-create')
            ->extends('admin.layout.master_admin')
            ->section('admin_main')
            ->with(['attributes' => Attribute::where('category_id', $this->category_id)->orderBy('priority', 'asc')->get()]);
    }
}
