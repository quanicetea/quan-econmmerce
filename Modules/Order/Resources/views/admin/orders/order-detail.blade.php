@extends('layouts.master')

@section('content-header')
    <h1>
        {{ trans('order::orders.title.order detail') }} : {{$order->order_code}}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li><a href="{{ route('admin.order.order.index') }}">{{ trans('order::orders.title.orders') }}</a></li>
        <li class="active">{{ trans('order::orders.title.order detail') }}</li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
                <div class="btn-group pull-right" style="margin: 0 0px 5px 0;">
                    <a href="{{ route('admin.order.order.index')}}" class="btn btn-primary btn-flat" style="padding: 4px 10px;"> {{ trans('order::orders.button.back') }}
                    </a>
                </div>

                {{-- <div class="btn-group pull-right" style="margin: 0px 5px 0px 0px;">
                    <a href="{{ route('admin.order.pdf.index',$order->id)}}" class="btn btn-primary btn-flat" style="padding: 4px 10px;"> {{ trans('order::customerorders.button.pdf') }}
                    </a>
                </div> --}}
        </div>
        
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <div class="tab-content">
                    <div class="box-body">
        <header class="clearfix">
            <section id="invoice-title-number">      
                <div class="separator"></div>
                <span id="number">{{ trans('order::orders.order-detail.order-number') }} : {{$order->order_code}}</span>
            </section>
            <div class="clearfix"></div>
            <section id="invoice-info">
                <div>
                  <p><span class="info">{{ trans('order::orders.order-detail.date') }}:</span> {{$order->create_at.date("Y-m-d H:i")}}</p>
                  <p><span class="info">{{ trans('order::orders.order-detail.name') }}:</span> {{$order->customer_firstname}} {{$order->customer_lastname}}</p>
                  <p><span class="info">{{ trans('order::orders.order-detail.phone') }}:</span> {{$order->customer_number}}</p>
                  <p><span class="info">{{ trans('order::orders.order-detail.address') }}:</span> {{$order->address}} {{$order->address_ward}} {{$order->address_district}} {{$order->address_city}}</p>
                </div>
            </section>
        </header>
        <main>
            <table>
                <thead>
                    <tr>
                    <th class="product stt">{{trans('order::orders.order-detail.number')}}</th>
                    <th class="product sp">{{trans('order::orders.order-detail.product')}}</th>
                    <th class="product">{{trans('order::orders.order-detail.price')}}</th>
                    <th class="product">{{trans('order::orders.order-detail.quantity')}}</th>
                    <th class="product tt">{{trans('order::orders.order-detail.amount')}}</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($orderItems as $key => $orderItem)
                    <tr>
                        
                        <td class="service product flag stt">#{{$key+1}}</td>
                        <td class="desc product flag sp">
                            @if(isset($orderItem->product))
                            {{$orderItem->product->name}}
                            @endif
                        </td>
                        <td class=" product flag">{{number_format($orderItem->price)}} </td>
                        <td class=" product flag">{{number_format($orderItem->quantity)}}
                            @if(isset($orderItem->product))
                            ({{$orderItem->product->getUnit->unit}})
                            @endif
                        </td>
                        <td class=" product flag tt">{{number_format($orderItem->quantity*$orderItem->price)}}</td>
                        
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="4">{{trans('order::orders.order-detail.subtotal')}}</td>
                        <td class=" product tt">{{number_format($order->sub_total)}}</td>
                    </tr>
                    {{-- <tr>
                        <td colspan="4">{{trans('order::customerorders.order-detail.vat')}} ({{$vat}}%)</td>
                        <td class=" product tt">{{number_format($order->vat)}}</td>
                    </tr> --}}
                    {{-- <tr>
                        <td colspan="4">{{trans('order::orders.order-detail.fee-shipping')}}</td>
                        <td class=" product tt">{{number_format($order->fee_shipping)}}</td>
                    </tr> --}}
                    <tr>
                        <td colspan="4" class="grand total">{{trans('order::orders.order-detail.total')}}</td>
                        <td class="grand total product tt">{{number_format($order->sub_total)}}</td>
                    </tr>
                </tbody>
            </table>
            {{-- <div id="notices">
                <!-- <div>NOTES:</div> -->
                <div ><span class="notes">{{ trans('order::orders.order-detail.notes') }}: </span><span class="notice">{{trans('order::orders.order-detail.notes-content')}}</span></div>
                <br>
            </div> --}}
        </main>
</div>
</div></div></div></div>
@stop

@section('footer')
    <a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
@stop
@section('shortcuts')
    <dl class="dl-horizontal">
        <dt><code>b</code></dt>
        <dd>{{ trans('core::core.back to index') }}</dd>
    </dl>
@stop

@push('js-stack')
    <script type="text/javascript">
        $( document ).ready(function() {
            $(document).keypressAction({
                actions: [
                    { key: 'b', route: "<?= route('admin.order.order.index') ?>" }
                ]
            });
        });
    </script>
@endpush
@section('styles')
<link rel="stylesheet" href="{{asset('/mystyle/css/order-detail.css')}}">
@endsection
