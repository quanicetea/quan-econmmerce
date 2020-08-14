<?php

namespace Modules\Customer\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Customer\Entities\Customer;
use Modules\Customer\Http\Requests\CreateCustomerRequest;
use Modules\Customer\Http\Requests\UpdateCustomerRequest;
use Modules\Customer\Repositories\CustomerRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\User\Entities\Sentinel\User;
use Yajra\DataTables\DataTables;

class CustomerController extends AdminBaseController
{
    /**
     * @var CustomerRepository
     */
    private $customer;

    public function __construct(CustomerRepository $customer)
    {
        parent::__construct();

        $this->customer = $customer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // $user = User::find(37);
        // $customer = $this->customer->find(37);
        // dd($customer);
        $customers = $this->customer->all();
        // dd($customers);

        return view('customer::admin.customers.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('customer::admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateCustomerRequest $request
     * @return Response
     */
    public function store(CreateCustomerRequest $request)
    {
        $this->customer->create($request->all());

        return redirect()->route('admin.customer.customer.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('customer::customers.title.customers')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Customer $customer
     * @return Response
     */
    public function edit(Customer $customer)
    {
        return view('customer::admin.customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Customer $customer
     * @param  UpdateCustomerRequest $request
     * @return Response
     */
    public function update(Customer $customer, UpdateCustomerRequest $request)
    {
        $this->customer->update($customer, $request->all());

        return redirect()->route('admin.customer.customer.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('customer::customers.title.customers')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Customer $customer
     * @return Response
     */
    public function destroy(Customer $customer)
    {
        $this->customer->destroy($customer);

        return redirect()->route('admin.customer.customer.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('customer::customers.title.customers')]));
    }

    public function datatable(Request $request){
        $customers = $this->customer->getData();
        return DataTables::of($customers)
        
        ->editColumn('name',function($customer){
            return $customer->first_name.' '.$customer->last_name;
        })
        
        ->addColumn('action', function ($customer) {
            return '<div class="btn-group">
                        <a href="'. route('admin.customer.customer.edit', [$customer->id]) .'" class="btn btn-default btn-flat">
                            <i class="fa fa-pencil"></i>
                        </a>
                    </div>';
        })
        // <button class="btn btn-danger btn-flat" data-toggle="modal"
        //                     data-target="#modal-delete-confirmation"
        //                     data-action-target="' . route('admin.customer.customer.destroy', [$customer->id]) . '" title="'.trans('customer::customers.button.delete').'">
        //                 <i class="fa fa-trash"></i></button>
        ->rawColumns(['action'])->make(true);
    }
}
