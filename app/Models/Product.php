<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'discount',
        'category_id',
        'stock',
        'rating',
        'image',
        'status',
        'description',
    ];

    // Add the category relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
