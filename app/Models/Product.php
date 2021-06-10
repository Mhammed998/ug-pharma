<?php

namespace App\Models;

use App\Models\Review;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";

    protected $fillable=[
       'name_ar', 'name_en' ,'description_ar',
        'description_en','code',
        'ingredients_ar','ingredients_en',
        'price','brand','size','status','images',
        'category_id'
    ];


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }




}
