<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';
    protected $primaryKey = 'id';


    public function productImage(){
        return $this->hasMany(ProductImageModel::class , 'product_id');

    }

    public function tags(){
        return $this->belongsToMany(TagModel::class, 'product_tags','product_id', 'tag_id')->withTimestamps();;
    }


    // public function productInTags(){

    // }



}
