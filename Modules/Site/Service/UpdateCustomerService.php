<?php 
namespace Modules\Site\Service;
use Modules\Customer\Repositories\CustomerRepository;
use Illuminate\Http\Request;

class UpdateCustomerService{
    private $customer;
    public function __construct(CustomerRepository $customer){
        $this->customer = $customer;
    }

    public function updateCustomer(Request $request){
       $customer = $this->customer->updateCustomer($request);
       return $customer;
    }
}