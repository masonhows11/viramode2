<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariantDefaultValue extends Model
{
    use HasFactory;

    protected $table = 'product_variant_default_values';

    /**
     * @var array
     */
    protected $fillable = [
        'attribute_id', 'value', 'price'
    ];

    /**
     * @var array
     */
    protected $casts = [
        'attribute_id'  =>  'integer',
    ];


    public function attribute()
    {
        return $this->belongsTo(ProductVariant::class);
    }
}
