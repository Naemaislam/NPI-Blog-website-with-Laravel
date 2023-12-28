<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $guarded =[''];

    public function RelationwithCategory(){
        return $this->hasOne(Category::class,'id','category_id');

    }
    public function RelationwithBlog(){
        return $this->hasOne(Blog::class,);

    }
}
