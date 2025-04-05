<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'address_id', 'total_amount', 'status'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function address(){
        return $this->belongsTo(UserAddresses::class, 'address_id');
    }
    public function items(){
        return $this->hasMany(CartItem::class);
    }
    public function histories()
    {
        return $this->hasMany(OrderHistory::class);
    }
    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }
    public function payment(){
        return $this->hasOne(Payment::class);
    }

}
