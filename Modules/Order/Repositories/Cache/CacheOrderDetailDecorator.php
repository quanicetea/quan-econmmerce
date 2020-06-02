<?php

namespace Modules\Order\Repositories\Cache;

use Modules\Order\Repositories\OrderDetailRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheOrderDetailDecorator extends BaseCacheDecorator implements OrderDetailRepository
{
    public function __construct(OrderDetailRepository $orderdetail)
    {
        parent::__construct();
        $this->entityName = 'order.orderdetails';
        $this->repository = $orderdetail;
    }
}
