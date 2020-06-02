<?php 
namespace Modules\Site\Service;
use Modules\Product\Entities\Product;
use Cart;
/**
 * 
 */
class CartService
{
    //thêm 1 sản phẩm vào giỏ hàng
    public function addProductToCart($product, $quantity)
	{
        $rows = Cart::search(function($key, $value) use ($product){
            return $key->id == $product->unique_id;
        });
        $item = $rows->first();
        if ($item) {
            Cart::update($item->rowId, $item->qty + $quantity);
        }else{
            Cart::add($product->unique_id, $product->name, $quantity, $product->price, ['image' => $product->image, 'unit' => $product->getUnit->unit,'user'=> $product->user]);
        }        
    }
    // xoá sản phẩm khỏi giỏ hàng
    public function removeFromCard($request)
    {
        $cart = Cart::content();
        foreach ($cart as $c) {
            if($c->id == $request->product_id)
                Cart::remove($c->rowId);
        }
    }
    	
}
