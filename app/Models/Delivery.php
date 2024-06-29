<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Delivery extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'delivery';
    protected $fillable = [
        'title',
        'amount',
        'delivery_time',
        'delivery_time_unit',
        'status',
    ];
}
