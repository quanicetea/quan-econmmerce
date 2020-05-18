<?php

namespace Modules\Site\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use Translatable;

    protected $table = 'site__sites';
    public $translatedAttributes = [];
    protected $fillable = [];
}
