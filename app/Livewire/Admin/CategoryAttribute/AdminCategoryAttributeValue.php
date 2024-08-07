<?php

namespace App\Livewire\Admin\CategoryAttribute;

use App\Models\CategoryAttribute;
use App\Models\CategoryAttributeValue;
use Livewire\Attributes\On;
use Livewire\Component;

class AdminCategoryAttributeValue extends Component
{
    public $cat_attr_id;
    public $cat_attr_val_id;
    public $edit_mode = false;

    // property for store
    public $value;
    public $quantity;
    public $price_increase = 0;
    public $product_id;
    public $type;

    public function mount($attribute)
    {
        $this->cat_attr_id = $attribute;
    }

    protected $rules = [
        'value' => ['required', 'min:1', 'max:30', 'string'],
        'price_increase' => ['nullable', 'numeric'],
        'quantity' => ['required','digits','gtr:0'],
        'product_id' => ['required', 'exists:products,id'],
        'type' => ['required']
    ];
    protected $messages = [
        'product_id.required' => 'فیلد محصول الزامی است',
        'value.required' => 'فیلد مقدار الزامی است',
        'quantity.required' => 'فیلد تعداد الزامی است',
        'quantity.digits' => 'فیلد تعداد عدد الزامی است',
        'quantity.gtr' => 'فیلد تعداد بزرگتر از صفر الزامی است'
    ];


    public function save()
    {
         $this->validate();
        try {
            if ($this->edit_mode == false) {
                $model = CategoryAttributeValue::create([
                    'product_id' => $this->product_id,
                    'category_attribute_id' => $this->cat_attr_id,
                    'value' => $this->value,
                    'quantity' => $this->quantity,
                    'price_increase' => $this->price_increase,
                    'type' => $this->type,
                ]);
                $this->product_id = '';
                $this->value = '';
                $this->price_increase = '';
                $this->type = '';
                $this->quantity = '';
                $this->dispatch('show-result',type:'success',message:__('messages.New_record_saved_successfully'));
            } elseif ($this->edit_mode == true)
            {
                CategoryAttributeValue::where('id', $this->cat_attr_val_id)
                    ->update(['product_id' => $this->product_id,
                        'category_attribute_id' => $this->cat_attr_id,
                        'value' => $this->value,
                        'quantity' => $this->quantity,
                        'price_increase' => $this->price_increase,
                        'type' => $this->type,]);
                $this->product_id = '';
                $this->value = '';
                $this->price_increase = '';
                $this->quantity = '';
                $this->type = '';
                $this->edit_mode = true;
                $this->dispatch('show-result', type:'success',message:__('messages.The_update_was_completed_successfully'));
            }

        } catch (\Exception $ex) {
            return view('errors_custom.model_store_error');
        }
        return null;
    }

    public function edit($id)
    {

        $this->cat_attr_val_id = $id;
        try {
            $value = CategoryAttributeValue::findOrFail($id);
            $this->value = $value->value;
            $this->price_increase = $value->price_increase;
            $this->product_id = $value->product_id;
            $this->type = $value->type;
            $this->quantity = $value->quantity;
            $this->edit_mode = true;

        } catch (\Exception $ex) {
            return view('errors_custom.model_not_found');
        }
        return null;
    }

    public function deleteConfirmation($id)
    {
        $this->cat_attr_val_id = $id;
        $this->dispatch('show-delete-confirmation');
    }

    #[On('deleteConfirmed')]
    public function deleteModel()
    {
        try {
            $model = CategoryAttributeValue::findOrFail($this->cat_attr_val_id);
            $model->delete();
            $this->dispatch('show-result',type:'success',message:__('messages.The_deletion_was_successful'));
        } catch (\Exception $ex) {
            return view('errors_custom.model_not_found');
        }
        return null;
    }

    public function render()
    {
        return view('livewire.admin.category-attribute.admin-category-attribute-value')
        ->extends('admin.layout.master_admin')
        ->section('admin_main')->with(['categoryAttribute' => CategoryAttribute::where('id', $this->cat_attr_id)->first()]);
    }
}
