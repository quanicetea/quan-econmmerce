@extends('layouts.master')

@section('content-header')
    <h1>
        {{ trans('product::products.title.edit product') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li><a href="{{ route('admin.product.product.index') }}">{{ trans('product::products.title.products') }}</a></li>
        <li class="active">{{ trans('product::products.title.edit product') }}</li>
    </ol>
@stop
@section('styles')
<link media="all" type="text/css" rel="stylesheet" href="/themes/adminlte/css/multi-upload-file.css">
<link media="all" type="text/css" rel="stylesheet" href="/themes/adminlte/css/cropper.min.css">
<link media="all" type="text/css" rel="stylesheet" href="/themes/adminlte/font/flaticon.css">
@stop
@section('scripts')
<script src="/themes/adminlte/js/cropper.min.js" type="text/javascript"></script>
<script src="/themes/adminlte/js/plugin-multi-upload-file.js" type="text/javascript"></script>
@stop
@section('content')
    {!! Form::open(['route' => ['admin.product.product.update', $product->unique_id], 'method' => 'put']) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="nav-tabs-custom">

                <div class="tab-content">
                   
                        <div class="tab-pane active">
                            @include('product::admin.products.partials.edit-fields')
                        </div>


                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-flat">{{ trans('core::core.button.update') }}</button>
                        <a class="btn btn-danger pull-right btn-flat" href="{{ route('admin.product.product.index')}}"><i class="fa fa-times"></i> {{ trans('core::core.button.cancel') }}</a>
                    </div>
                </div>
            </div> {{-- end nav-tabs-custom --}}
        </div>
    </div>
    {!! Form::close() !!}
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
                    { key: 'b', route: "<?= route('admin.product.product.index') ?>" }
                ]
            });
        });
    </script>
    <script>
        $( document ).ready(function() {
            $('input[type="checkbox"].flat-blue, input[type="radio"].flat-blue').iCheck({
                checkboxClass: 'icheckbox_flat-blue',
                radioClass: 'iradio_flat-blue'
            });
        });
        $(".multi-upload-file3").uploadMultiImage({
            urlApi:'{{ route('api.uploadImage') }}',
            resData: "data",
            single: true,
            sizeLimit: 2048000,
            resizeMessage: 'Hình ảnh không vượt quá 2 MB'
        });
        
    </script>
@endpush
