<?php

namespace Modules\Order\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Order\Entities\OrderAdmin;
use Modules\Order\Http\Requests\CreateOrderAdminRequest;
use Modules\Order\Http\Requests\UpdateOrderAdminRequest;
use Modules\Order\Repositories\OrderAdminRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class OrderAdminController extends AdminBaseController
{
    /**
     * @var OrderAdminRepository
     */
    private $orderadmin;

    public function __construct(OrderAdminRepository $orderadmin)
    {
        parent::__construct();

        $this->orderadmin = $orderadmin;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$orderadmins = $this->orderadmin->all();

        return view('order::admin.orderadmins.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('order::admin.orderadmins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateOrderAdminRequest $request
     * @return Response
     */
    public function store(CreateOrderAdminRequest $request)
    {
        $this->orderadmin->create($request->all());

        return redirect()->route('admin.order.orderadmin.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('order::orderadmins.title.orderadmins')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  OrderAdmin $orderadmin
     * @return Response
     */
    public function edit(OrderAdmin $orderadmin)
    {
        return view('order::admin.orderadmins.edit', compact('orderadmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  OrderAdmin $orderadmin
     * @param  UpdateOrderAdminRequest $request
     * @return Response
     */
    public function update(OrderAdmin $orderadmin, UpdateOrderAdminRequest $request)
    {
        $this->orderadmin->update($orderadmin, $request->all());

        return redirect()->route('admin.order.orderadmin.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('order::orderadmins.title.orderadmins')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  OrderAdmin $orderadmin
     * @return Response
     */
    public function destroy(OrderAdmin $orderadmin)
    {
        $this->orderadmin->destroy($orderadmin);

        return redirect()->route('admin.order.orderadmin.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('order::orderadmins.title.orderadmins')]));
    }
}
