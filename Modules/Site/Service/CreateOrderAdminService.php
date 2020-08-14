<?php 
namespace Modules\Site\Service;
use Modules\Order\Repositories\OrderAdminRepository;
use Illuminate\Http\Request;
use Modules\Customer\Entities\Customer;
use Modules\User\Entities\Sentinel\User;

class CreateOrderAdminService{
    private $orderAdmin;
    public function __construct(OrderAdminRepository $orderAdmin){
        $this->orderAdmin = $orderAdmin;
    }

    public function createOrderAdmin(User $customer,Request $request){
       $orderAdmin = $this->orderAdmin->createOrderAdmin($customer,$request);
    //    dd($order);
       return $orderAdmin;
    }
}