<?php

namespace App\Http\Controllers\Dash\Attributes;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use Illuminate\Http\Request;

class AttributesController extends Controller
{
    //
    public function index()
    {

        return view('admin.attributes.index');

    }

    public function create(Request $request)
    {
        $attributes = Attribute::where('category_id', $request->id)->orderBy('priority', 'asc')->get();
        $category = Category::where('id', $request->id)->select('title_persian')->first();
        return view('admin.attributes.create', ['category' => $category, 'attributes' => $attributes]);
    }

    public function store(Request $request)
    {

        Attribute::create([
            'name' => $request->name,
            'type' => $request->type,
            'priority' => $request->priority,
            'category_id' => $request->category_id,
            'has_default_value' => $request->has_default_value,
        ]);
    }

    public function edit(Request $request)
    {

        Attribute::where('id', $request->attribute_id)
            ->update(['name' => $request->name,
                'type' => $request->type,
                'priority' => $request->priority,
                'has_default_value' => $request->has_default_value]);
    }

    public function update(Request $request)
    {

    }

    public function delete(Request $request)
    {
        dd('hi');
    }


}
