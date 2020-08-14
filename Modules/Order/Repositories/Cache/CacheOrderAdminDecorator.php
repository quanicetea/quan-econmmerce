<?php

namespace Modules\Order\Repositories\Cache;

use Modules\Order\Repositories\OrderAdminRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheOrderAdminDecorator extends BaseCacheDecorator implements OrderAdminRepository
{
    public function __construct(OrderAdminRepository $orderadmin)
    {
        parent::__construct();
        $this->entityName = 'order.orderadmins';
        $this->repository = $orderadmin;
    }
}
