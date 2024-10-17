<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'sim_card',
        'cpu',
        'pin',
        'design_style',
        'screen_resolution',
        'sub_title',
        'category_id',
    ];

    protected $appends = [
        'price_original',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class);
    }

    public function getPriceOriginalAttribute()
    {
        return $this->productDetails()->min('price');
    }

    // public function getPriceCurrentAttribute()
    // {
    //     $minPriceDetail = $this->productDetails()->orderBy('price', 'asc')->first();
    //     if (empty($minPriceDetail->productDetailSale)) {
    //         return;
    //     }
    //     $productDetailSaleLastest = $minPriceDetail->productDetailSale()->orderBy('updated_at', 'desc')->first();
    //     // Check sale deleted or active none
    //     if (empty($productDetailSaleLastest->sale) || !$productDetailSaleLastest->sale->active) {
    //         return;
    //     }

    //     return $productDetailSaleLastest->price;
    // }

    public function getImageAttribute()
    {
        return $this->images()->first()->url ?? '';
    }
}
