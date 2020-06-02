<?php

namespace Modules\Order\Repositories\Eloquent;

use Modules\Order\Repositories\OrderDetailRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;
use Cart;
use Modules\Product\Entities\Product;
use Modules\Order\Entities\Order;
class EloquentOrderDetailRepository extends EloquentBaseRepository implements OrderDetailRepository
{
    public function createOrderDetail(Order $order, $cartItems){
        $orderDetail = [];
        foreach ($cartItems as $item) {
            $options = $item->options;
            Cart::update($item->rowId, compact('options'));
            $product = Product::where('unique_id',$item->id)->first();
            $this->create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'quantity' => $item->qty,
                'price' => $item->price,
                'user_id' => $item->options->user->id,
            ]);
        }
    }
}
