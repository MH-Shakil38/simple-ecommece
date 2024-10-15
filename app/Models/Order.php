<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
      'customer_id',
      'total_amount',
      'total_qty',
      'status',
      'delivery_cost',
      'shipping_cost',
      'shipping_type',
      'message',
      'invoice_id'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }

    public function orders(){
        return $this->hasMany(OrderDetails::class,'order_id','id');
    }
}
