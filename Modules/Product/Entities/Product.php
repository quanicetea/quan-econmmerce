<?php

namespace Modules\Product\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Category\Entities\Category;
use Modules\Unit\Entities\Unit;
use Modules\User\Entities\Sentinel\User;

class Product extends Model
{
    use SoftDeletes, HasUUID;

    const ACTIVE = 1;
    const UNACTIVE = 0;
    
    protected $uuidFieldName = 'unique_id';
    protected $table = 'product';
    protected $fillable = [
        'name',
        'status',
        'price',
    	'description',
    	'image',
    	'unit_id',
        'category_id',
        'user_id',
    ];

    public function category(){
    	return $this->belongsTo(Category::class, 'category_id');
    }

    public function user(){
    	return $this->belongsTo(User::class, 'user_id');
    }
    
    public function getUnit(){
        return $this->belongsTo(Unit::class,'unit_id');
    }
}
