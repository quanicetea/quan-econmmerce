<?php

namespace Modules\Order\Entities;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{


    protected $table = 'order';

    protected $fillable = ['user_id','customer_phone','customer_firstname','customer_lastname','email','status','sub_total','vat','vat_percent','delivery_fee','total','address','order_code'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function orderDetail()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }
}

