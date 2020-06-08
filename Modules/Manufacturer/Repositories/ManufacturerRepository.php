<?php

namespace Modules\Manufacturer\Repositories;

use Modules\Core\Repositories\BaseRepository;

interface ManufacturerRepository extends BaseRepository
{
    public function getData();
}
