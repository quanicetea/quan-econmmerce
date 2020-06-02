<?php

namespace Modules\Order\Repositories;

use Modules\Core\Repositories\BaseRepository;
use Modules\Order\Entities\Order;

interface OrderDetailRepository extends BaseRepository
{
    public function createOrderDetail(Order $order, $cartItems);
}
