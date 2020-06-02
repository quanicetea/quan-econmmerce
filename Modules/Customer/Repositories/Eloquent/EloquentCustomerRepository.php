<?php

namespace Modules\Customer\Repositories\Eloquent;

use Modules\Customer\Repositories\CustomerRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Modules\Customer\Entities\Customer;

class EloquentCustomerRepository extends EloquentBaseRepository implements CustomerRepository
{
    public function createCustomer(Request $request){
        // dd($request->phone_number);
        $customer = Customer::where('phone_number',$request->phone_number)->first();
        // $customer = $this->findByAttributes(['phone_number',$request->phone_number]);
        // dd($customer);
        // dd(1);
        if($customer == null){
            try{
                DB::beginTransaction();
                $customer = $this->create([
                    'first_name' => isset($request->first_name)? $request->first_name :"",
                    'last_name' => isset($request->last_name)? $request->last_name :"",
                    'phone_number' => isset($request->phone_number)? $request->phone_number :"",
                    'email' => isset($request->email)? $request->email :"",
                    'address' => isset($request->address)? $request->address :"",
                ]);
                DB::commit();
            }catch (\Exception $exception){
                DB::rollback();
            }
        }else{
            $customer = $this->update($customer,$request->all());
        }
        
        return $customer;
    }
}
