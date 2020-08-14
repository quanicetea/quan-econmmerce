@extends('layouts.master')

@section('content-header')
    <h1>
        {{ trans('customer::customers.title.customers') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li class="active">{{ trans('customer::customers.title.customers') }}</li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="btn-group pull-right" style="margin: 0 15px 15px 0;">
                    <a href="{{ route('admin.customer.customer.create') }}" class="btn btn-primary btn-flat" style="padding: 4px 10px;">
                        <i class="fa fa-pencil"></i> {{ trans('customer::customers.button.create customer') }}
                    </a>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="data-table table table-bordered table-hover">
                            <thead>
                                <th>#</th>
                                <th>{{trans('customer::customers.table.name')}}</th>
                                <th>{{trans('customer::customers.table.email')}}</th>
                                <th>{{trans('customer::customers.table.phone')}}</th>
                                <th>{{trans('customer::customers.table.address')}}</th>
                                <th>{{trans('core::core.table.actions')}}</th>
                            </thead>
                            <tbody>
                            
                            </tbody>
                            <tfoot>
                            <tr>
                                
                            </tr>
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
        <dd>{{ trans('customer::customers.title.create customer') }}</dd>
    </dl>
@stop

@push('js-stack')
    <script type="text/javascript">
        $( document ).ready(function() {
            $(document).keypressAction({
                actions: [
                    { key: 'c', route: "<?= route('admin.customer.customer.create') ?>" }
                ]
            });
        });
    </script>
    <?php $locale = locale(); ?>
    <script type="text/javascript">
        $(function () {
            var oTable = $('.data-table').DataTable({
            processing:true,
            serverSide:true,
            sort: false,
            ajax: {
                url: '{{ route('admin.customer.customer.datatable') }}',
                data: function (d) {
                    // d.status = $('#status').val();
                    // d.start_date = $('#val-start-date').val();
                    // d.end_date = $('#val-end-date').val();
                }
            },
            columns: [
                {data:'id',searchable:true},
                {data:'name',searchable:false},
                {data:'email',searchable:true},
                {data:'phone',searchable:true},                    
                {data:'address',searchable:true},
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
