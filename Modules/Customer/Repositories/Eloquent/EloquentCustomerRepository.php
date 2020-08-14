<?php

namespace Modules\Customer\Repositories\Eloquent;

use Modules\Customer\Repositories\CustomerRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Modules\Customer\Entities\Customer;
use Cartalyst\Sentinel\Laravel\Facades\Activation;

class EloquentCustomerRepository extends EloquentBaseRepository implements CustomerRepository
{
    public function createCustomer(array $request){
        $customer = $this->create([
            'first_name' => isset($request['first_name'])? $request['first_name'] :"",
            'last_name' => isset($request['last_name'])? $request['last_name'] :"",
            'phone' => isset($request['phone_number'])? $request['phone_number'] :"",
            'email' => isset($request['email'])? $request['email'] :"",
            'address' => isset($request['address'])? $request['address'] :"",
            'password' => isset($request['password'])? bcrypt($request['password']) :"",
            'is_customer' => 1,
        ]);
        $this->activateUser($customer);
        return $customer;
    }
    public function activateUser($user) {
        $activationQuery = DB::table("activations")
            ->select('activations.code', 'activations.completed')
            ->where('activations.user_id', $user->id)
            ->first();
        if(empty($activationQuery)) {
            $activation = Activation::create($user);
        } else {
            $activation = $activationQuery;
        }
        Activation::complete($user, $activation->code);
    }
    public function updateCustomer(array $request){
        $customer = $this->model->find($request['id']);
        $this->update($customer,
        [
            'first_name'=>$request['user_first_name'],
            'last_name'=>$request['user_last_name'],
            'phone'=>$request['user_phone'],
            'address'=>$request['user_address'],
        ]);
        $customer->phone = $request['user_phone'];
        $customer->save();
        // if(isset($request['changePassWord'])){

        //     dd($request['changePassWord']);
        // }
        return $customer;
    }

    public function getData()
	{
        $customers = $this->model->orderBy('id','DESC')->where('id','<>',1);
        return $customers;
	}
}
