<?php

namespace Modules\Order\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Order\Entities\OrderDetail;
use Modules\Order\Http\Requests\CreateOrderDetailRequest;
use Modules\Order\Http\Requests\UpdateOrderDetailRequest;
use Modules\Order\Repositories\OrderDetailRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class OrderDetailController extends AdminBaseController
{
    /**
     * @var OrderDetailRepository
     */
    private $orderdetail;

    public function __construct(OrderDetailRepository $orderdetail)
    {
        parent::__construct();

        $this->orderdetail = $orderdetail;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$orderdetails = $this->orderdetail->all();

        return view('order::admin.orderdetails.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('order::admin.orderdetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateOrderDetailRequest $request
     * @return Response
     */
    public function store(CreateOrderDetailRequest $request)
    {
        $this->orderdetail->create($request->all());

        return redirect()->route('admin.order.orderdetail.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('order::orderdetails.title.orderdetails')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  OrderDetail $orderdetail
     * @return Response
     */
    public function edit(OrderDetail $orderdetail)
    {
        return view('order::admin.orderdetails.edit', compact('orderdetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  OrderDetail $orderdetail
     * @param  UpdateOrderDetailRequest $request
     * @return Response
     */
    public function update(OrderDetail $orderdetail, UpdateOrderDetailRequest $request)
    {
        $this->orderdetail->update($orderdetail, $request->all());

        return redirect()->route('admin.order.orderdetail.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('order::orderdetails.title.orderdetails')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  OrderDetail $orderdetail
     * @return Response
     */
    public function destroy(OrderDetail $orderdetail)
    {
        $this->orderdetail->destroy($orderdetail);

        return redirect()->route('admin.order.orderdetail.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('order::orderdetails.title.orderdetails')]));
    }
}
