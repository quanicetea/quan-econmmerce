<?php

namespace Modules\Unit\Repositories\Cache;

use Modules\Unit\Repositories\UnitRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheUnitDecorator extends BaseCacheDecorator implements UnitRepository
{
    public function __construct(UnitRepository $unit)
    {
        parent::__construct();
        $this->entityName = 'unit.units';
        $this->repository = $unit;
    }
}
