<?php

namespace App\Livewire\Admin\Stock;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class StockProduct extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';


    public function render()
    {
        return view('livewire.admin.stock.stock-product')
        ->extends('admin.layout.master_admin')
        ->section('admin_main')->with(['products' => Product::where('title_persian','like','%'.$this->search.'%')
                ->Orwhere('title_english','like','%'.$this->search.'%')
                ->select('id', 'title_persian', 'thumbnail_image', 'number_sold', 'frozen_number','available_in_stock','salable_quantity')->paginate(10)]);
    }
}
