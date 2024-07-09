<?php

namespace App\Http\Controllers\Dash\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductCreateSpecificationsController extends Controller
{
    //
    public function index(Request $request)
    {
       // dd('hi');
        return view('admin.product.create.create_specifications')
             ->with('product',$request->product);
    }
}
