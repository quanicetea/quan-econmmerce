@extends('layouts.master')

@section('content-header')
    <h1>
        {{ trans('product::products.title.products') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li class="active">{{ trans('product::products.title.products') }}</li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="btn-group pull-right" style="margin: 0 15px 15px 0;">
                    <a href="{{ route('admin.product.product.create') }}" class="btn btn-primary btn-flat" style="padding: 4px 10px;">
                        <i class="fa fa-pencil"></i> {{ trans('product::products.button.create product') }}
                    </a>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table style="width: 100%;" class="data-table table table-bordered table-hover" id="products">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ trans('product::products.table.name') }}</th>
                                <th>{{ trans('product::products.table.category') }}</th>
                                <th>{{ trans('product::products.table.manufacturer') }}</th>
                                <th>{{ trans('product::products.table.unit') }}</th>
                                <th>{{ trans('product::products.table.status') }}</th>
                                <th>{{ trans('product::products.table.price') }}</th>
                                <th data-sortable="false">{{ trans('core::core.table.actions') }}</th>
                            </tr>
                            </thead>
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
        <dd>{{ trans('product::products.title.create product') }}</dd>
    </dl>
@stop

@push('js-stack')
    <script type="text/javascript">
        $( document ).ready(function() {
            $(document).keypressAction({
                actions: [
                    { key: 'c', route: "<?= route('admin.product.product.create') ?>" }
                ]
            });
        });
    </script>
    <?php $locale = locale(); ?>
    <script type="text/javascript">
        $(function () {
            var oTable = $('#products').DataTable({
                processing:true,
                serverSide:true,
                sort: false,
                ajax: {
                    url: '{{ route('admin.product.product.datatable') }}',
                    data: function (d) {
                        // d.category = $('#category').val();
                    }
                },
                columns: [
                    {data:'id',searchable:true},
                    {data:'name',searchable:true},
                    {data:'category', name: 'category.name', searchable:true},
                    {data:'manufacturer', name: 'manufacturer.name' , searchable:true},
                    {data:'unit',name: 'getUnit.unit',searchable:true},
                    {data:'status',searchable:false},
                    {data:'price',searchable:true},
                    {data:'action',searchable:false},
                ],
                "language": {
                    "url": '<?php echo Module::asset("core:js/vendor/datatables/{$locale}.json") ?>'
                }
            });
        });
    </script>
@endpush
