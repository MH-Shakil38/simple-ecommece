<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TmpOrder extends Model
{
    use HasFactory;
    protected $table = 'tmp_orders';
    protected $fillable = [
        'customer_id',
        'product_id',
        'qty',
        'selling_price',
        'total',
        'stock_id'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }

    public function stock(){
        return $this->belongsTo(Stock::class,'stock_id');
    }
}
