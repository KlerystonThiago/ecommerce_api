<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'name',
        'description',
        'price',
        'highlights',
        'voltage',
        'brand_id',
        'image'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
