<?php

namespace Modules\Api\Entities;

use Illuminate\Database\Eloquent\Model;

class ApiTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'api__api_translations';
}
