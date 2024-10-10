<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'images';

    protected $fillable = [
        'url',
    ];

    public function imageable()
    {
        return $this->morphTo();
    }

    // Listen to the saved event
    protected static function booted()
    {
        static::saved(function (Image $image) {
            // Check if the imageable model is a Product
            if ($image->imageable_type === Product::class) {
                $image->imageable->touch(); // This will update the updated_at timestamp
            }
        });

        static::deleted(function (Image $image) {
            // Check if the imageable model is a Product
            if ($image->imageable_type === Product::class) {
                $image->imageable->touch(); // Update the updated_at timestamp when an image is deleted
            }
        });
    }
}
