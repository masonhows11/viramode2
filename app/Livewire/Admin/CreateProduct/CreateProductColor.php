<?php

namespace App\Livewire\Admin\CreateProduct;

use App\Models\Color;
use App\Models\Product;
use App\Models\ProductColor;
use Livewire\Attributes\On;
use Livewire\Component;

class CreateProductColor extends Component
{

    public $product;
    public $product_id;
    public $color_id;
    public $edit_mode = false;
    public $color_name;

    // product color fields
    public $color;
    public $default;
    public $price_increase;
    public $status;
    public $available_in_stock;
    public $salable_quantity;


    public function mount($product)
    {
        $this->product_id = $product;
        $this->product = Product::where('id', $product)->select(['id', 'title_persian'])->first();

    }

    protected $rules = [
        'color' => ['required'],
        'price_increase' => ['required', 'numeric', 'gt:0'],
        'status' => ['required'],
        'salable_quantity' => ['required', 'numeric', 'gt:-1'],
        'available_in_stock' => ['required', 'numeric', 'gt:-1'],
    ];


    public function save()
    {
        $this->validate();
        try {
            if ($this->edit_mode == false)
            {
                $this->color_name = Color::where('id', $this->color)->select(['title_persian', 'code'])->first();
                $exitsAsDefault = ProductColor::where('color_id',$this->color)->exists();
                if($exitsAsDefault){
                    $this->color = '';
                    $this->price_increase = '';
                    $this->status = '';
                    $this->available_in_stock = '';
                    $this->salable_quantity = '';
                    $this->dispatch('show-result',type:'warning',message:__('messages.this_is_a_duplicate_item'));
                }else {
                    ProductColor::create([
                        'color_id' => $this->color,
                        'color_name' => $this->color_name->title_persian,
                        'color_code' => $this->color_name->code,
                        'product_id' => $this->product_id,
                        'default' => 0,
                        'price_increase' => $this->price_increase,
                        'status' => $this->status,
                        'salable_quantity' => $this->salable_quantity,
                        'available_in_stock' => $this->available_in_stock,
                    ]);
                    $this->color = '';
                    $this->price_increase = '';
                    $this->status = '';
                    $this->available_in_stock = '';
                    $this->salable_quantity = '';
                    $this->dispatch('show-result', type: 'success', message: __('messages.New_record_saved_successfully'));
                }
            } elseif ($this->edit_mode == true) {
                $this->color_name = Color::where('id', $this->color)->select(['title_persian', 'code'])->first();
                ProductColor::where('id', $this->color_id)
                    ->update([
                        'color_id' => $this->color,
                        'color_name' => $this->color_name->title_persian,
                        'color_code' => $this->color_name->code,
                        'product_id' => $this->product_id,
                        'price_increase' => $this->price_increase,
                        'status' => $this->status,
                        'salable_quantity' => $this->salable_quantity,
                        'available_in_stock' => $this->available_in_stock,
                    ]);
                $this->color = '';
                $this->price_increase = '';
                $this->status = '';
                $this->salable_quantity = '';
                $this->available_in_stock = '';
                $this->dispatch('show-result', type: 'success', message: __('messages.The_update_was_completed_successfully'));
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
            $color = ProductColor::findOrFail($id);
            $this->color = $color->color_id;
            $this->status = $color->status;
            $this->price_increase = $color->price_increase;
            $this->salable_quantity = $color->salable_quantity;
            $this->default = $color->default;
            $this->available_in_stock = $color->available_in_stock;

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
            $model = ProductColor::findOrFail($this->color_id);
            $model->delete();
            $this->dispatch('show-result',type:'success',message: __('messages.The_deletion_was_successful'));
        } catch (\Exception $ex) {
            return view('errors_custom.model_not_found');
        }
        return null;
    }

    public function render()
    {
        return view('livewire.admin.create-product.create-product-color')
            ->with(['product' => $this->product,
                'product_colors' => ProductColor::where('product_id', $this->product_id)->where('default', 0)->orderBy('color_name', 'asc')->get(),
                'colors' => Color::all()]);
    }
}
