<?php

namespace App\Http\Controllers\Dash\Attributes;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Category;
use Illuminate\Http\Request;

class AttributesValueController extends Controller
{
    //
    public function create(Request $request)
    {
        $category = Category::where('id', $request->id)->select('title_persian')->first();
        $attributes = Attribute::where('category_id', $request->id)->where('has_default_value', 1)->orderBy('priority', 'asc')->get();
        return view('admin.attributes_value.create', ['category' => $category, 'attributes' => $attributes]);
    }


    public function store(Request $request)
    {

        try {
            AttributeValue::create([
                'value' => $request->value,
                'attribute_id' => $request->name,
                'priority' => $request->priority,
            ]);
            session()->flash('success', __('messages.New_record_saved_successfully'));
            return redirect()->back();
        } catch (\Exception $ex) {
            session()->flash('success', __('messages.An_error_occurred'));
            return redirect()->back();
        }


    }

    public function edit(Request $request)
    {
        try {
            $attributeValue = AttributeValue::findOrFail($request->id);
            return  view('admin.attributes_value.edit',['attributeValue' => $attributeValue]);
        } catch (\Exception $ex) {
            session()->flash('success', __('messages.An_error_occurred'));
            return redirect()->back();
        }
    }

    public function update(Request $request)
    {
        try {
            AttributeValue::where('id', $request->attribute_value_id)
                ->update(['value' => $request->value,
                    'attribute_id' => $request->name,
                    'priority' => $request->priority,]);

            session()->flash('succes', __('messages.The_update_was_completed_successfully'));
        } catch (\Exception $ex) {
            session()->flash('success', __('messages.An_error_occurred'));
            return redirect()->back();
        }
    }


    public function delete(Request $request)
    {
        try {
            AttributeValue::destroy($request->id);
            session()->flash('success', __('messages.The_deletion_was_successful'));
            return redirect()->back();
        } catch (\Exception $ex) {
            session()->flash('success', __('messages.An_error_occurred'));
            return redirect()->back();
        }

    }
}
