<?php

namespace App\Http\Controllers\Dash\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductBasicRequest;
use App\Models\Product;
use App\Repositories\ProductBasicRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductEditController extends Controller
{


    protected ProductBasicRepository $productBasicRepository;

    public function __construct(ProductBasicRepository $basicRepository)
    {
        $this->productBasicRepository = $basicRepository;
    }
    public function edit(Request $request)
    {

        try {
            $category_ids[] = '';
            $product = Product::findOrFail($request->product);

            $category_attributes = DB::table('categories')
                ->where('has_specifications','=',1)
                ->select('id','title_persian')->get();

            $categories =  DB::table('categories')
                ->select('id','title_persian')->get();
            foreach ($product->categories as $cat) {
                $category_ids[] = $cat->id;
            }
            $brands = DB::table('brands')->select('id','title_persian')->get();
            return view('admin.product.edit.edit_basic')
                ->with(['product' => $product,
                    'categories' => $categories,
                    'category_ids' => $category_ids,
                    'brands' => $brands,
                    'category_attributes' => $category_attributes]);
        } catch (\Exception $ex) {
            session()->flash('error',__('messages.An_error_occurred'));
            return redirect()->back();
            // return view('errors_custom.model_not_found');
        }

    }

    public function update(ProductBasicRequest $request)
    {

        try {
            $this->productBasicRepository->update($request);
            session()->flash('success', __('messages.The_update_was_completed_successfully'));
            return redirect()->route('admin.product.index');
        } catch (\Exception $ex) {

            session()->flash('error',__('messages.An_error_occurred'));
            return redirect()->back();

           // return $ex->getMessage();
           // return view('errors_custom.model_store_error');
        }
    }


}
