<?php 
namespace Modules\Site\Service;
use Modules\Order\Repositories\OrderDetailRepository;
use Illuminate\Http\Request;
use Modules\Order\Entities\Order;

class CreateOrderDetailService{
    private $orderDetail;
    public function __construct(OrderDetailRepository $orderDetail){
        $this->orderDetail = $orderDetail;
    }

    public function createOrderDetail(Order $order,$cartItems){
       $orderDetail = $this->orderDetail->createOrderDetail($order,$cartItems);
       return $orderDetail;
    }
}