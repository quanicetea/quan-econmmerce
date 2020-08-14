<?php

namespace Modules\Order\Repositories\Eloquent;

use Modules\Order\Repositories\OrderAdminRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;
use Illuminate\Http\Request;
use DB;
use Modules\Customer\Entities\Customer;
use Cart;
use Carbon\Carbon;
use Modules\User\Entities\Sentinel\User;
class EloquentOrderAdminRepository extends EloquentBaseRepository implements OrderAdminRepository
{
    public function createOrderAdmin(User $customer,Request $request){
        $orderAdmin = null;
        $subtotal = Cart::subtotal(0,'','');
        // dd(($subtotal));
        $total = Cart::total(0,'','');
        // dd($total);
        $vat = Cart::tax(0,'','');
        // $vat_percent = config('cart.tax');
        try{
            DB::beginTransaction();
            $now = Carbon::now();
            $year = $now->year;
            $month = $now->month;
            $day = $now->day;
            $minute = $now->minute;
            $second = $now->second;
            $order_code = $year.$month.$day.$minute.$second;
            $orderAdmin = $this->create([
                'user_id' => $customer->id,
                'email' => $customer->email,
                'sub_total' => $subtotal,
                'vat' => $vat,
                'total' => $total,
                'address' => $customer->address,
                'order_code' => $order_code
            ]);
            DB::commit();
        }catch(\Exception $exception){
            DB::rollback();
        }
        return $orderAdmin;
    }
    public function listOrdersAdmin($request){

    }
}
