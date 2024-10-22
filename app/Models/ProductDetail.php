<?php

namespace App\Models;

use App\Models\Scopes\ActiveProductScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected static function booted()
    {
        static::addGlobalScope(new ActiveProductScope);
    }

    protected $table = 'product_details';

    protected $fillable = [
        'product_id',
        'color_id',
        'storage_id',
        'quantity',
        'price',
    ];

    protected $appends = [
        'price_current',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function storage()
    {
        return $this->belongsTo(Storage::class);
    }

    public function productDetailSale()
    {
        return $this->hasMany(ProductDetailSale::class);
    }

    // Automatically update the 'updated_at' field of the related Product
    protected $touches = ['product'];

    public function getPriceCurrentAttribute()
    {
        $productDetailSaleLastest = $this->productDetailSale()->orderBy('updated_at', 'desc')->first();
        // Check sale deleted or active none
        if (empty($productDetailSaleLastest->sale) || !$productDetailSaleLastest->sale->active) {
            return;
        }

        return $productDetailSaleLastest->price;
    }
}
