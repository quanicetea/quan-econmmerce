<?php

namespace Modules\Api\Repositories\Cache;

use Modules\Api\Repositories\ApiRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheApiDecorator extends BaseCacheDecorator implements ApiRepository
{
    public function __construct(ApiRepository $api)
    {
        parent::__construct();
        $this->entityName = 'api.apis';
        $this->repository = $api;
    }
}
