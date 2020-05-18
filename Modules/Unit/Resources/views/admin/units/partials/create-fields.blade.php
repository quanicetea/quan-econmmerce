<div class="box-body">
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group{{ $errors->has('unit') ? ' has-error' : '' }}">
                {!! Form::label('unit', trans('unit::units.form.unit')) !!}<span class="required" style="color: red;" aria-required="true"> * </span>
                {!! Form::text('unit', old('unit'), ['class' => 'form-control','placeholder' => trans('unit::units.form.unit')]) !!}
                {!! $errors->first('unit', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
    </div>
</div>
