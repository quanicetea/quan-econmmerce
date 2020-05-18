<?php

namespace Modules\Country\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{


    protected $table = 'country';
    // public $translatedAttributes = [];
    // protected $fillable = ['country_code','country_name'];
    protected $guarded = [];
}
