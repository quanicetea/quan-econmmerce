<?php

namespace Modules\Order\Repositories;

use Modules\Core\Repositories\BaseRepository;
use Modules\User\Entities\Sentinel\User;
use Illuminate\Http\Request;
interface OrderAdminRepository extends BaseRepository
{
    public function createOrderAdmin(User $customer,Request $request);
    public function listOrdersAdmin($request);
}
