<?php

namespace App\Http\Controllers\Dash\Product;

use App\Http\Controllers\Controller;
use App\Repositories\ProductBasicRepository;
use App\Http\Requests\ProductBasicRequest;
use Illuminate\Support\Facades\DB;


class ProductCreateController extends Controller
{

    public ProductBasicRepository $productBasicRepository;

    public function __construct(ProductBasicRepository $basicRepository)
    {
        $this->productBasicRepository = $basicRepository;
    }

    public function create()
    {
        $category_attributes = DB::table('categories')
            ->where('has_specifications','=',1)
            ->select('id','title_persian')->get();
        $categories =  DB::table('categories')
            ->select('id','title_persian')->get();
        $brands = DB::table('brands')
            ->select('id','title_persian')->get();
        return view('admin.product.create.create_basic')
            ->with(['categories' => $categories,
                   'brands' => $brands,
                   'category_attributes' => $category_attributes]);
    }

    public function store(ProductBasicRequest $request)
    {


        try {
            $this->productBasicRepository->store($request);

            session()->flash('success', __('messages.New_record_saved_successfully'));
            return redirect()->route('admin.product.index');
        } catch (\Exception $ex) {
            session()->flash('error',__('messages.An_error_occurred'));
            return redirect()->back();
           //  return  $ex->getMessage();
           //  return view('errors_custom.model_store_error');
        }


    }


}
