<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected  $table="categories";

    protected  $fillable=[
        'title' , 'description' , 'cate_image' , 'status'
    ];


    public function products(){
        return $this->hasMany(Product::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }





}
