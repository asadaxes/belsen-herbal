<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Products extends Model
{
    protected $fillable = [
        'name',
        'thumbnail',
        'category_id',
        'date'
    ];

    public $timestamps = false;
    
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($product) {
            $product->date = Carbon::now('Asia/Dhaka');
        });
    }

    public function parent_category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}