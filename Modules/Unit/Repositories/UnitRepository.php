<?php

namespace Modules\Unit\Repositories;

use Modules\Core\Repositories\BaseRepository;

interface UnitRepository extends BaseRepository
{
    public function getData();
}
