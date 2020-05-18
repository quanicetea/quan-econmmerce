<?php

namespace Modules\Category\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Product\Entities\Product;

class Category extends Model
{
    use SoftDeletes, HasUUID;
	protected $uuidFieldName = 'unique_id';
    protected $table = 'category';
    protected $fillable = [
    	'name', 'slug'
    ];

    //Một cate có nhiều sản phẩm trong đó
    public function products(){
    	return $this->hasMany(Product::class, 'category_id');
    }
}
