<?php 
namespace Modules\Site\Service;
use Modules\Customer\Repositories\CustomerRepository;
use Illuminate\Http\Request;

class CreateCustomerService{
    private $customer;
    public function __construct(CustomerRepository $customer){
        $this->customer = $customer;
    }

    public function createCustomer(Request $request){
       $customer = $this->customer->createCustomer($request);
       return $customer;
    }
}