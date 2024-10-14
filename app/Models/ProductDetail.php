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

    // Automatically update the 'updated_at' field of the related Product
    protected $touches = ['product'];
}
