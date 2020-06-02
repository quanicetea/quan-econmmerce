<select class="form-control status_option" name="status" id="status_option" data-id ="{{ $order->id }}">
    @foreach(config('asgard.order.config.status') as $key => $status)
        <option value="{{$key}}" {{$order->status == $key?'selected':''}}>{{$status}}</option>
    @endforeach
</select>