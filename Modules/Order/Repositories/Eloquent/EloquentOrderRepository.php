<?php

namespace Modules\Order\Repositories\Eloquent;

use Modules\Order\Repositories\OrderRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;
use Illuminate\Http\Request;
use DB;
use Modules\Customer\Entities\Customer;
use Cart;
use Carbon\Carbon;
use Modules\User\Entities\Sentinel\User;

class EloquentOrderRepository extends EloquentBaseRepository implements OrderRepository
{
    public function createOrder(User $customer,Request $request){
        // dd($customer);
        $order = null;
        $subtotal = Cart::subtotal(0,'','');
        // dd(($subtotal));
        $total = Cart::total(0,'','');
        // dd($total);
        $vat = Cart::tax(0,'','');
        $vat_percent = config('cart.tax');
        try{
            DB::beginTransaction();
            $now = Carbon::now();
            $year = $now->year;
            $month = $now->month;
            $day = $now->day;
            $minute = $now->minute;
            $second = $now->second;
            $order_code = $year.$month.$day.$minute.$second;
            $order = $this->create([
                'user_id' => $customer->id,
                'customer_phone' => $customer->phone,
                'customer_firstname' => $customer->first_name,
                'customer_lastname' => $customer->last_name,
                'email' => $customer->email,
                'status' => 0,
                'sub_total' => $subtotal,
                'vat' => $vat,
                'vat_percent' => $vat_percent,
                'delivery_fee' =>0,
                'total' => $total,
                'address' => $customer->address,
                'order_code' => $order_code
            ]);
            DB::commit();
        }catch(\Exception $exception){
            DB::rollback();
        }
        return $order;
    }

    public function listOrders($request){
		$models = $this->model->select('order.*', 'order.created_at as order_date')->orderBy('id','DESC');
		// if($request->has('status')){
		// 	$models->where('status', $request->status);
		// }
		// if(!empty($request->start_date)){
		// 	$start_date= $request->start_date;
		// 	$models->where('order.created_at', '>=', $start_date);
		// }
		// if(!empty($request->end_date)){
		// 	$end_date = $request->end_date.' 23:59:59';
		// 	$models->where('order.created_at','<=', $end_date);
        // }
        
		return $models;
	}
}   
