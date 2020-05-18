<?php

namespace Modules\Api\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    use Translatable;

    protected $table = 'api__apis';
    public $translatedAttributes = [];
    protected $fillable = [];
}
