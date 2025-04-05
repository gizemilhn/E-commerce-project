<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['admin_id','name','description','price','stock','is_published'];

    public function admin(){
        return $this->belongsTo(User::class,'admin_id');
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }
}
