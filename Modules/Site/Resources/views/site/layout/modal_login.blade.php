<div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <form id="userloginModalForm" method="POST" action="{{route('site.post.login')}}">
            {{csrf_field()}}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                    <div class="form-row form-row-wide">
                        <div class="form-group has-feedback {{ $errors->has('login_email') ? ' has-error' : '' }}">
                            <label for="login_email">
                                Email <span class="required">*</span>
                            </label>
                            <input type="email" class="form-control" autofocus
                                   name="login_email" placeholder="Email" value="{{ old('login_email')}}">
                            {!! $errors->first('login_email', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-row form-row-wide">
                        <div class="form-group has-feedback {{ $errors->has('login_email') ? ' has-error' : '' }}">
                            <label for="login_password">Password <span class="required">*</span></label>
                            <input type="password" class="form-control" autofocus
                                   name="login_password" placeholder="Password" value="{{ old('login_password')}}">
                            {!! $errors->first('login_password', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="checkbox clearfix">
                        <span class="lostpassword-modal-link pull-right">
                            <a href="#lostpasswordModal" data-rel="lostpasswordModal">Lost your password?</a>
                        </span>
                    </div>
                </div>
                <div class="modal-footer">
                    <span class="user-login-modal-register pull-left">
                        <a data-rel="registerModal" href="#">Not a Member yet?</a>
                    </span>
                    <button type="submit" class="btn btn-default btn-outline">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</div>