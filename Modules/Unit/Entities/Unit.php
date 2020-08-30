<?php

namespace Modules\Unit\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\Product\Entities\Product;

class Unit extends Model
{
    protected $table = 'unit';
    // public $translatedAttributes = [];
    protected $fillable = ['unit'];

    //một đơn vị có thể dùng cho nhiều sản phẩm
    public function products(){
    	return $this->hasMany(Product::class, 'unit_id');
    }
}
