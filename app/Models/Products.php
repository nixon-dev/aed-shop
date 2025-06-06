<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'c_id',
        'p_name',
        'p_slug',
        'p_price',
        'p_price_sale',
        'p_stock',
        'p_sku',
        'p_image',
        'p_featured',
    ];

    public static function generateUniqueSlug($productName)
    {
        $slug = Str::slug($productName);
        $originalSlug = $slug;
        $counter = 1;

        while (self::where('p_slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    protected $table = 'products';
}