<?php

namespace Modules\Order\Repositories;

use Modules\Core\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Modules\Customer\Entities\Customer;
use Modules\User\Entities\Sentinel\User;
interface OrderRepository extends BaseRepository
{
    public function createOrder(User $customer,Request $request);
    public function listOrders($request);
}
