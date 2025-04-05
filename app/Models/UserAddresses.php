<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddresses extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','title','address','city','district','postcode'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    //
}
