@if(session()->has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{ session()->get('success') }}
    </div>
@endif
@if(session()->has('message'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{ session()->get('message') }}
    </div>
@endif
<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Log In</div>
            </div>

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form action="{{asset('/login')}}" id="loginform" class="form-horizontal" role="form" method="post">
                    {{csrf_field()}}
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-email" type="text" class="form-control" name="login_email"  placeholder="email" required>
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="login_password" required placeholder="password">
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                Don't have an account!
                                <a href="{{asset('/signup')}}">
                                    Sign Up Here
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Submit -->
                    <div class="form-group">
                        <label class="col-sm-12 controls" for="submit"></label>
                        <div class="col-md-4">
                            <input type="submit" id="submit" name="submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
