<div class="box-body">
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
            <input name="user_id" value="{{$user->id}}" type='hidden'/>
                <div class="col-sm-6">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! Form::label('name', trans('product::products.form.name')) !!}<span class="required" style="color: red;" aria-required="true"> * </span>
                        {!! Form::text('name', old('name'), ['class' => 'form-control','placeholder' => trans('product::products.form.name')]) !!}
                        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                        {!! Form::label('price', trans('product::products.form.price')) !!}<span class="required" style="color: red;" aria-required="true"> * </span>
                        {!! Form::text('price', old('price'), ['class' => 'form-control','placeholder' => trans('product::products.form.price')]) !!}
                        {!! $errors->first('price', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                        {!! Form::label('category_id', trans('product::products.form.category')) !!}<span class="required" style="color: red;" aria-required="true"> * </span>
                        <select name="category_id" id="category" class="form-control">
                            @if($categories)
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                @endforeach
                            @endif

                        </select>
                        {!! $errors->first('category_id', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group{{ $errors->has('unit_id') ? ' has-error' : '' }}">
                        {!! Form::label('unit_id', trans('product::products.form.unit')) !!}<span class="required" style="color: red;" aria-required="true"> * </span>
                        <select name="unit_id" id="unit" class="form-control">
                            @foreach($unit as $item)
                                <option {{ old('unit_id') == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->unit }}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('unit_id', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
            </div>
            <div class="row" style="padding-left: 15px; padding-right: 15px;">
                @editor('description',trans('product::products.form.description'),old('description'))
            </div>
            
            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                <label class="ccontrol-label ">{{ trans('product::products.form.image') }} </label><span class="required" style="color: red;" aria-required="true"> * </span>
                <div class="multi-upload-file multi-upload-file3">
                    <input type="file" style="display: none" id="file-upload3" class="input-upload-file" accept="image/x-png,image/gif,image/jpeg"/>
                    <input name="image" value="{{ old('image') }}" type='hidden'/>

                    <div class="image-preview"></div>
                    <label class="mark-input" for="file-upload3"><span>+</span></label>
                    <div style="clear:both"></div>
                </div>
                {!! $errors->first('image', '<span class="help-block">:message</span>') !!}
            </div>
            {{-- <input name="image" type="file" id="file-upload3" class="input-upload-file" accept="image/x-png,image/gif,image/jpeg"/> --}}
        </div>
    </div>
</div>

