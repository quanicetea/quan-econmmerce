<div class="box-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group has-feedback {{ $errors->has('first_name') ? ' has-error has-feedback' : '' }}">
                    <label for="first_name">{{ trans('user::auth.first_name') }}</label>
                    <input disabled type="text" name="first_name" class="form-control" autofocus
                           placeholder="{{ trans('user::auth.first_name') }}" value="{{$customer->first_name, old('first_name') }}">
                    {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group has-feedback {{ $errors->has('last_name') ? ' has-error has-feedback' : '' }}">
                    <label for="last_name">{{ trans('user::auth.last_name') }}</label>
                    <input disabled type="text" name="last_name" class="form-control" autofocus
                           placeholder="{{ trans('user::auth.last_name') }}" value="{{$customer->last_name, old('last_name') }}">
                    {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                </div>
            </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error has-feedback' : '' }}">
                    <label for="email">{{ trans('user::auth.email') }}</label>
                    <input disabled type="email" name="email" class="form-control" autofocus
                           placeholder="{{ trans('user::auth.email') }}" value="{{ $customer->email,old('email') }}">
                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group has-feedback {{ $errors->has('phone') ? ' has-error has-feedback' : '' }}">
                    <label for="phone">{{ trans('user::auth.phone') }}</label>
                    <input disabled type="text" name="phone" class="form-control" autofocus
                           placeholder="{{ trans('user::auth.phone') }}" value="{{ $customer->phone,old('phone') }}">
                    {!! $errors->first('phone', '<span class="help-block">:message</span>') !!}
                </div>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <div class="form-group has-feedback {{ $errors->has('address') ? ' has-error has-feedback' : '' }}">
            <label for="address">{{ trans('user::auth.address') }}</label>
            <input disabled type="text" name="address" class="form-control" autofocus
                   placeholder="{{ trans('user::auth.address') }}" value="{{$customer->address, old('address') }}">
            {!! $errors->first('address', '<span class="help-block">:message</span>') !!}
        </div>
    </div>

