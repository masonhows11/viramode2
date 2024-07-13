<?php

namespace App\Http\Controllers\Dash\Attributes;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Attributes\CreateAttributeRequest;
use App\Http\Requests\Admin\Attributes\EditAttributeRequest;
use App\Models\Attribute;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AttributesController extends Controller
{
    //
    public function index()
    {
        return view('admin.attributes.index');
    }

    public function create(Request $request)
    {
        $attributes = Attribute::where('category_id', $request->id)
            ->orderBy('priority', 'asc')->get();
        $category = Category::where('id', $request->id)
            ->select('id', 'title_persian')->first();
        return view('admin.attributes.create', ['category' => $category, 'attributes' => $attributes]);
    }

    public function store(CreateAttributeRequest $request)
    {

        try {

            Attribute::create([
                'name' => $request->name,
                'type' => $request->type,
                'priority' => $request->priority,
                'category_id' => $request->category_id,
                'has_default_value' => $request->has_default_value,
            ]);

            session()->flash('success', __('messages.New_record_saved_successfully'));
            return redirect()->back();
        } catch (\Exception $ex) {
            session()->flash('success', __('messages.An_error_occurred'));
            return redirect()->back();
        }

    }

    public function edit(Attribute $attribute)
    {
        return view('admin.attributes.edit', ['attribute' => $attribute]);
    }

    public function update(EditAttributeRequest $request)
    {
        try {

            Attribute::where('id', $request->attr_id)
                ->update(['name' => $request->name,
                    'type' => $request->type,
                    'priority' => $request->priority,
                    'has_default_value' => $request->has_default_value]);

            session()->flash('success', __('messages.The_update_was_completed_successfully'));
            return redirect()->route('admin.attribute.create',['id' => $request->category_id ]);
        } catch (\Exception $ex) {
            session()->flash('success', __('messages.An_error_occurred'));
            return redirect()->back();
        }

    }

    public function delete(Request $request)
    {
        try {
            Attribute::destroy($request->id);
            session()->flash('success', __('messages.The_deletion_was_successful'));
            return redirect()->back();
        } catch (\Exception $ex) {
            session()->flash('success', __('messages.An_error_occurred'));
            return redirect()->back();
        }

    }


}
