<?php

namespace App\Livewire\Admin\Brand;

use App\Models\Brand;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class AdminBrandList extends Component
{
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    use WithPagination;
    public $delete_id;
    public $brand_active = true;
    public $brand_id;


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function active($id)
    {
        $this->brand_id = $id;

        $brand = Brand::findOrFail($id);
        if ($brand->is_active == 0) {
            $brand->is_active = 1;
            $this->brand_active = true;
            $brand->save();
        } else {
            $brand->is_active = 0;
            $this->brand_active = false;
            $brand->save();
        }
        $this->dispatch('show-result',
            ['type' => 'success',
                'message' => __('messages.The_changes_were_made_successfully')]);

    }

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatch('show-delete-confirmation');
    }



    #[On('deleteConfirmed')]
    public function deleteBrand()
    {
        try {

            $brand = Brand::findOrFail($this->delete_id);
            if($brand->logo_path != null){
                Storage::disk('public')->delete('/images/'.$brand->logo_path);
            }
            $brand->delete();
            $this->dispatch('show-result', type:'success',message:'رکورد با موفقیت حذف شد');
        } catch (\Exception $ex) {
            return view('errors_custom.model_not_found');
        }
        return null;
    }

    public function render()
    {
        return view('livewire.admin.brand.admin-brand-list')
        ->extends('admin.layout.master_admin')
        ->section('admin_main')
            ->with(['brands' => Brand::where('title_persian','like','%'.$this->search.'%')
                ->OrWhere('title_english','like','%'.$this->search.'%')->orderBy('id','asc')->paginate(9)]);
    }
}
