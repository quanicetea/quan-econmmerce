<?php

namespace Modules\Site\Entities;

use Illuminate\Database\Eloquent\Model;

class SiteTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'site__site_translations';
}
