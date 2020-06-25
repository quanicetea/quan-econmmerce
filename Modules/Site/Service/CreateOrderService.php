<?php 
namespace Modules\Site\Service;
use Modules\Order\Repositories\OrderRepository;
use Illuminate\Http\Request;
use Modules\Customer\Entities\Customer;
use Modules\User\Entities\Sentinel\User;

class CreateOrderService{
    private $order;
    public function __construct(OrderRepository $order){
        $this->order = $order;
    }

    public function createOrder(User $customer,Request $request){
       $order = $this->order->createOrder($customer,$request);
    //    dd($order);
       return $order;
    }
}