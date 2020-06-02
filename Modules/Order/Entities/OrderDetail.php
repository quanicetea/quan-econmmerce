<?php

namespace Modules\Order\Entities;


use Illuminate\Database\Eloquent\Model;
use Modules\Product\Entities\Product;
class OrderDetail extends Model
{
    protected $table = 'order_detail';
    protected $fillable = ['order_id','quantity','product_id','price'];
    
    public function product(){
    	return $this->belongsTo(Product::class, 'product_id')->withTrashed();
    }
}
