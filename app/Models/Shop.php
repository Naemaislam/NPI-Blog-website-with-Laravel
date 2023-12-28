<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [''];

// public function RelationwithUser(){
//     return $this->hasOne(User::class,'id','user_id');

// }

}
