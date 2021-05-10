<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{

    protected $table="wishlists";

    protected $fillable=[

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }



}
