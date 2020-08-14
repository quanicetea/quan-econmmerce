<?php

namespace Modules\Customer\Entities;

use Modules\User\Entities\Sentinel\User;
use Illuminate\Database\Eloquent\Model;
use Modules\Customer\Entities\Order;
class Customer extends User
{
    

    // protected $table = 'customer';
    // protected $fillable = [];
    protected $fillable = ['first_name','last_name','phone_number','email','address','password','user_id'];

    
}
