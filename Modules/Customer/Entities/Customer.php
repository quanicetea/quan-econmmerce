<?php

namespace Modules\Customer\Entities;


use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    

    protected $table = 'customer';
    
    protected $fillable = ['first_name','last_name','phone_number','email','address'];
}
