<div class="modal fade user-register-modal" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <form id="userregisterModalForm" method="POST" action="{{route('site.register')}}">
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Register account</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="form-group has-feedback {{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <div class="col-sm-6">
                                <label>First Name</label>
                                <input type="text" name="first_name" required class="form-control" value="" placeholder="First Name">
                                {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="col-sm-6">
                                <label>Last Name</label>
                                <input type="text" name="last_name" required class="form-control" value="" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required class="form-control" value="" placeholder="Email">
                            </div>
                            <div class="col-sm-6">
                                <label for="phone">Phone Number</label>
                                <input type="text" id="phone" name="phone" required class="form-control" value="" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="password">Password</label>
                                <input type="password" id="password" required value="" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="col-sm-6">
                                <label for="password_confirm">Retype password</label>
                                <input type="password" id="password_confirm" required value="" name="password_confirm" class="form-control" placeholder="Retype password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" required value="" name="address" class="form-control" placeholder="Address">
                    </div>
                </div>
                <div class="modal-footer">
                    <span class="user-login-modal-link pull-left">
                        <a data-rel="loginModal" href="#loginModal">Already have an account?</a>
                    </span>
                    <button type="submit" class="btn btn-default btn-outline">Register</button>
                </div>
            </form>
        </div>
    </div>