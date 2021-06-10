<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    protected $table="reviews";

    protected $fillable=[
      'rate' , 'comment' , 'username' ,'product_id'
    ];


    public function product(){
        return $this->belongsTo(Product::class);
    }







}
