<div class="box-body">
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {!! Form::label('name', trans('category::categories.form.name')) !!}<span class="required" style="color: red;" aria-required="true"> * </span>
                {!! Form::text('name', old('name'), ['class' => 'form-control', 'data-slug' =>  'source','placeholder' => trans('category::categories.form.name')]) !!}
                {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                {!! Form::label('slug', trans('category::categories.form.slug')) !!}<span class="text-danger" >*</span>
                {!! Form::text('slug', old('slug'), ['class' => 'form-control', 'data-slug'  =>  'target', 'placeholder' => trans('category::categories.form.slug')]) !!}
                {!! $errors->first('slug', '<span class="help-block">:message</span>') !!}
            </div>
        </div>
    </div>
</div>
