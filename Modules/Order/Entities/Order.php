<?php

namespace Modules\Order\Entities;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{


    protected $table = 'order';
    protected $casts = [
        'shop_id' => 'array'
    ];
    protected $fillable = ['user_id',
        'customer_phone',
        'customer_firstname',
        'customer_lastname',
        'email','status',
        'sub_total',
        'vat',
        'vat_percent',
        'delivery_fee',
        'total',
        'address',
        'order_code',
        'order_admin_id',
        'shop_id'
    ];

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
        return $this->hasMany('Modules\Order\Entities\OrderDetail', 'order_id');
    }
    public function orderAdmin()
    {
        return $this->belongsTo(OrderAdmin::class, 'order_admin_id');
    }
}

