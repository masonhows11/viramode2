<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductBasicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title_persian' => ['required', 'min:2', 'max:100'],
            'title_english' => ['required', 'min:2', 'max:100'],
            'short_description' => ['required', 'min:2','string','max:5000'],
            'status' => ['required'],
            'sku' => ['required', 'min:1', 'max:100'],
            'marketable' => ['required'],
            //|dimensions:min_width=300,min_height=300
            'thumbnail_image' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:1999',
            'published_at' => ['nullable', 'numeric'],
            'full_description' => ['nullable', 'min:2','string','max:5000'],
            'seo_desc' => ['nullable', 'min:2','string','max:150'],
            'categories' => ['nullable'],
            'brand_id' => ['nullable'],
            'product_tags' => ['nullable'],
            'origin_price' => ['nullable', 'gt:0', 'integer'],
            'weight' => ['nullable', 'decimal:0,4'],
            'length' => ['nullable', 'decimal:0,4'],
            'width' => ['nullable', 'decimal:0,4'],
            'height' => ['nullable', 'decimal:0,4'],
            'category_attribute_id' => ['nullable'],
            'available_in_stock' => ['nullable','min:1']

        ];
    }

    //'product_tags' => ['required','regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ی.,]+$/u'],

}
