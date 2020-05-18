<?php

namespace Modules\Country\Repositories\Cache;

use Modules\Country\Repositories\QuocGiaRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheQuocGiaDecorator extends BaseCacheDecorator implements QuocGiaRepository
{
    public function __construct(QuocGiaRepository $quocgia)
    {
        parent::__construct();
        $this->entityName = 'country.quocgias';
        $this->repository = $quocgia;
    }
}
