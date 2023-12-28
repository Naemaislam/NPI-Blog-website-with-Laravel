<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fronted extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function RelationwithUser(){
        return $this->hasOne(User::class,'id','user_id');

    }
}
