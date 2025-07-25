<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'total_price',
        'status',
    ];
    public function item()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
