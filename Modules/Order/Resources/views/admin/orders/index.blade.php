@extends('layouts.master')

@section('content-header')
    <h1>
        {{ trans('order::orders.title.orders') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li class="active">{{ trans('order::orders.title.orders') }}</li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="data-table table table-bordered table-hover">
                            <thead>
                                <th>#</th>
                                <th>{{trans('order::orders.table.order code')}}</th>
                                <th>{{trans('order::orders.table.order date')}}</th>
                                <th>{{trans('order::orders.table.customer')}}</th>
                                <th>{{trans('order::orders.table.address')}}</th>
                                <th>{{trans('order::orders.table.status')}}</th>
                                <th>{{trans('order::orders.table.total')}}</th>
                                <th>{{trans('core::core.table.actions')}}</th>
                            </thead>

                            <tbody>
                            </tbody>
                            
                            <tfoot>
                            </tfoot>
                        </table>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    @include('core::partials.delete-modal')
@stop

@section('footer')
    <a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
@stop
@section('shortcuts')
    <dl class="dl-horizontal">
        <dt><code>c</code></dt>
        <dd>{{ trans('order::orders.title.create order') }}</dd>
    </dl>
@stop

@push('js-stack')
    <script type="text/javascript">
        $( document ).ready(function() {
            $(document).keypressAction({
                actions: [
                    { key: 'c', route: "<?= route('admin.order.order.create') ?>" }
                ]
            });
        });
    </script>
    <?php $locale = locale(); ?>
    <script type="text/javascript">
    $( document ).ready(function() {
        var oTable = $('.data-table').DataTable({
                processing:true,
                serverSide:true,
                sort: false,
                ajax: {
                    url: '{{ route('admin.order.order.data-table') }}',
                    data: function (d) {
                        d.status = $('#status').val();
                        d.start_date = $('#val-start-date').val();
                        d.end_date = $('#val-end-date').val();
                    }
                },
                columns: [
                    {data:'id',searchable:true},
                    {data:'order_code',searchable:true},
                    {data:'order_date',searchable:false},
                    {data:'customer_name',searchable:true},                    
                    {data:'address',searchable:true},
                    {data:'status',searchable:true},
                    {data:'total',searchable:true},
                    {data:'action',searchable:true},
                ],
                "order": [ 0, 'desc' ],
                "language": {
                    "url": '<?php echo Module::asset("core:js/vendor/datatables/{$locale}.json") ?>'
                }
            });
    });
    </script>
@endpush
