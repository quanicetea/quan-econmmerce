@extends('layouts.master')

@section('content-header')
    <h1>
        {{ trans('manufacturer::manufacturers.title.manufacturers') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li class="active">{{ trans('manufacturer::manufacturers.title.manufacturers') }}</li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="btn-group pull-right" style="margin: 0 15px 15px 0;">
                    <a href="{{ route('admin.manufacturer.manufacturer.create') }}" class="btn btn-primary btn-flat" style="padding: 4px 10px;">
                        <i class="fa fa-pencil"></i> {{ trans('manufacturer::manufacturers.button.create manufacturer') }}
                    </a>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="data-table table table-bordered table-hover" id="manufacturer">
                            <thead>
                                <th>#</th>
                                <th>{{ trans('manufacturer::manufacturers.table.name') }}</th>
                                <th data-sortable="false">{{ trans('core::core.table.actions') }}</th>
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
        <dd>{{ trans('manufacturer::manufacturers.title.create manufacturer') }}</dd>
    </dl>
@stop

@push('js-stack')
    <script type="text/javascript">
        $( document ).ready(function() {
            $(document).keypressAction({
                actions: [
                    { key: 'c', route: "<?= route('admin.manufacturer.manufacturer.create') ?>" }
                ]
            });
        });
    </script>
    <?php $locale = locale(); ?>
    <script type="text/javascript">
        $(function () {
            var oTable = $('#manufacturer').DataTable({
                processing:true,
                serverSide:true,
                sort: false,
                ajax: {
                    url: '{{ route('admin.manufacturer.manufacturer.datatable') }}',
                    data: function (d) {
                    }
                },
                columns: [
                    {data:'id',searchable:true},
                    {data:'name',searchable:true},
                    {data:'action',searchable:false},
                ],
                "language": {
                    "url": '<?php echo Module::asset("core:js/vendor/datatables/{$locale}.json") ?>'
                }
            });
        });
    </script>
@endpush
