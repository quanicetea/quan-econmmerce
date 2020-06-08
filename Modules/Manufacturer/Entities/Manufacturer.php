<?php

namespace Modules\Manufacturer\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Product\Entities\Product;
class Manufacturer extends Model
{

    protected $table = 'manufacturer';
    protected $fillable = ['name','slug'];

    public function products(){
    	return $this->hasMany(Product::class, 'manufacturer_id');
    }
}
