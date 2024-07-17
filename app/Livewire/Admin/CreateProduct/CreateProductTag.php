<?php

namespace App\Livewire\Admin\CreateProduct;

use App\Models\Product;
use App\Models\Tag;
use Livewire\Attributes\On;
use Livewire\Component;

class CreateProductTag extends Component
{
    public $Product;
    public $productId;
    public $Tag;
    public $tag_id;

    public function mount($product_id)
    {
        $this->productId = $product_id;
        $this->Product = Product::findOrfail($product_id);

    }

    public function save()
    {
        $this->Product->tags()->toggle($this->Tag);
        $this->dispatch('show-result',type:'success',message:__('messages.The_changes_were_made_successfully'));
        $this->Tag = '';

    }
    public function deleteConfirmation($id)
    {
        $this->tag_id = $id;
        $this->dispatch('show-delete-confirmation');
    }

    #[On('deleteConfirmed')]
    public function deleteBrand()
    {
        try {
            $this->Product->tags()->detach($this->tag_id);
            $this->dispatch('show-result',type:'success',message:__('messages.The_deletion_was_successful'));
            $this->Tag = '';
        } catch (\Exception $ex) {
            return view('errors_custom.model_not_found');
        }
        return null;
    }
    public function render()
    {
        return view('livewire.admin.create-product.create-product-tag')
            ->with(['product' => $this->Product, 'tags' => Tag::all()]);
    }
}
