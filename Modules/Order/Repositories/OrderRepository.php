<?php

namespace Modules\Order\Repositories;

use Modules\Core\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Modules\Customer\Entities\Customer;
interface OrderRepository extends BaseRepository
{
    public function createOrder(Customer $customer,Request $request);
    public function listOrders($request);
}
