<?php

namespace Modules\Order\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class OrderAdmin extends Model
{

    protected $table = 'order_admin';
    protected $fillable = [
        'order_code',
        'user_id',
        'email',
        'sub_total',
        'vat',
        'total',
        'address'
    ];

    public function order()
    {
        return $this->hasMany(Order::class, 'order_admin_id');
    }
}
