<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductList extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $delete_id;

    // filter & search parameter
    public $search = '';
    public $paginate = 10;
    public $orderBy = 'id';
    public $orderAsc = true;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function changeState($id)
    {
        $product = Product::findOrFail($id);
        if ($product->status == 0) {
            $product->status = 1;
        } else {
            $product->status = 0;
        }
        $product->save();

        $this->dispatch('show-result',type:'success',message:__('messages.The_changes_were_made_successfully'));

    }

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatch('show-delete-confirmation');
    }

    protected $listeners = [
        'deleteConfirmed' => 'deleteProduct',
    ];

    public function deleteProduct()
    {
        try {

            $product = Product::findOrFail($this->delete_id);
            if($product->thumbnail_image != null){
                Storage::disk('public')->delete('/images/products/'.$product->thumbnail_image);
            }
            $product->delete();
            $this->dispatch('show-result',type:'success',message:__('messages.The_deletion_was_successful'));

        } catch (\Exception $ex) {
            return view('errors_custom.model_not_found');
        }
        return null;
    }

    public function render()
    {
        return view('livewire.admin.product.product-list')
        ->extends('admin.layout.master_admin')
        ->section('admin_main')
        ->with(['categories'=> DB::table('categories')->select('id','title_persian')->get(),
        'products' => Product::search($this->search)
            ->orderBy($this->orderBy ,$this->orderAsc ? 'asc' : 'desc')->paginate($this->paginate)]);


    }


}
