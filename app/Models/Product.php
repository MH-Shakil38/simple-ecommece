<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
      'category_id',
      'name',
      'slug',
      'description',
      'original_price',
      'selling_price',
      'offer_price',
      'image',
      'quantity',
      'product_code',
      'status',
      'show_hot_deal',
      'stock',
      'stock_out',
      'short_description'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function sizePrice(){
        return $this->hasMany(Stock::class,'product_id');
    }
}
