<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryModel extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $table = 'categories';
    protected $primaryKey = 'id';

    public function categoryChildrent(){

        return $this->hasMany(CategoryModel::class, 'parent_id');

    }

    public function products() {
        return $this->hasMany(ProductModel::class, 'category_id');

    }

}
