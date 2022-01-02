<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function products(){
        return $this->hasMany(Product::class,'category_id');
    }

    public function image(){
        return $this->belongsTo(Image::class,'image_id');
    }
}
