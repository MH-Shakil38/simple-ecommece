<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'customer_address',
    ];

    public function tmp_orders(){
        return $this->hasMany(TmpOrder::class,'customer_id','id');
    }
    public function order(){
        return $this->hasMany(Order::class,'customer_id','id');
    }
}
