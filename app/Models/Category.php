<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected  $table="categories";

    protected  $fillable=[
        'title_en' ,'title_ar' , 'description_ar' , 'description_en', 'cate_image' , 'status'
    ];


    public function products(){
        return $this->hasMany(Product::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }





}
