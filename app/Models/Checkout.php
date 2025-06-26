<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'name', 'email', 'phone_num', 'address', 'payment_method', 'city', 'state', 'zip',];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

}
