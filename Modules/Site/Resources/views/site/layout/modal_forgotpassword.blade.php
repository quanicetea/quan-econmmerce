<div class="modal fade user-lostpassword-modal" id="userlostpasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <form id="userlostpasswordModalForm" method="POST" action="{{route('reset.post')}}">
            {{csrf_field()}}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Forgot Password</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        {{-- <label>Email</label>
                        <input type="text" name="email" required class="form-control" value="" placeholder="Email"> --}}
                        <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">
                                Email <span class="required">*</span>
                            </label>
                            <input type="email" class="form-control" autofocus
                                   name="email" placeholder="Email" value="{{ old('email')}}">
                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <span class="user-login-modal-link pull-left">
                        <a data-rel="loginModal" href="#loginModal">Already have an account?</a>
                    </span>
                    <button type="submit" class="btn btn-default btn-outline">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>