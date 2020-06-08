<?php

namespace Modules\Manufacturer\Repositories\Cache;

use Modules\Manufacturer\Repositories\ManufacturerRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheManufacturerDecorator extends BaseCacheDecorator implements ManufacturerRepository
{
    public function __construct(ManufacturerRepository $manufacturer)
    {
        parent::__construct();
        $this->entityName = 'manufacturer.manufacturers';
        $this->repository = $manufacturer;
    }
}
