<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $table = 'cards';
    protected $fillable = [
      'session_id',
      'product_id',
      'qty'
    ];

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
