<?php

namespace Modules\Order\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Order\Entities\Order;
use Modules\Order\Entities\OrderDetail;
use Modules\Order\Http\Requests\CreateOrderRequest;
use Modules\Order\Http\Requests\UpdateOrderRequest;
use Modules\Order\Repositories\OrderRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Yajra\Datatables\Datatables;

class OrderController extends AdminBaseController
{
    /**
     * @var OrderRepository
     */
    private $order;
    /**
     * @var Datatables
     */
    private $dataTables;

    public function __construct(OrderRepository $order, Datatables $dataTables)
    {
        parent::__construct();

        $this->order = $order;
        $this->dataTables = $dataTables;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$orders = $this->order->all();

        return view('order::admin.orders.index', compact(''));
    }

    public function dataTable(Request $request){
        $orders = $this->order->listOrders($request);
        return $this->dataTables->eloquent($orders)
        ->addColumn('customer_name', function($order){
            return $order->customer_firstname.' '.$order->customer_lastname;
        })
        ->addColumn('total', function($order){
            return number_format($order->total);
        })
        ->addColumn('status', function($order){
            return view('order::admin.orders.partials.option-status', compact('order'))->render();
        })
        ->editColumn('order_date', function($order){
            return date('Y-m-d', strtotime($order->date_order));
        })
        ->addColumn('action', function($order){
            return '<div class="btn-group">
                        <a href="'. route('admin.order.order.view-detail', [$order->id]) .'" class="btn btn-default btn-flat"><i class="fa fa-eye"></i></a></div>';
        })
        ->rawColumns(['customer_name', 'action', 'status','address','total'])->addIndexColumn()->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('order::admin.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateOrderRequest $request
     * @return Response
     */
    public function store(CreateOrderRequest $request)
    {
        $this->order->create($request->all());

        return redirect()->route('admin.order.order.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('order::orders.title.orders')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Order $order
     * @return Response
     */
    public function edit(Order $order)
    {
        return view('order::admin.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Order $order
     * @param  UpdateOrderRequest $request
     * @return Response
     */
    public function update(Order $order, UpdateOrderRequest $request)
    {
        $this->order->update($order, $request->all());

        return redirect()->route('admin.order.order.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('order::orders.title.orders')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Order $order
     * @return Response
     */
    public function destroy(Order $order)
    {
        $this->order->destroy($order);

        return redirect()->route('admin.order.order.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('order::orders.title.orders')]));
    }

    public function viewDetail(Order $order){
        $orderItems = OrderDetail::where('order_id', $order->id)->get();
        // foreach($orderItems as $item){
        //     dd($item->product->name);
        // }
        return view('order::admin.orders.order-detail', compact('order', 'orderItems'));
    }
}
