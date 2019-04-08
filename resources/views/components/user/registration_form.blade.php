@if(count($errors)>0)
    <div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </div>
@endif
<form class="form-horizontal" action="{{asset('/signup')}}" method="post">
    {{csrf_field()}}
    <fieldset>

        <!-- Form Name -->
        <legend align="center">Sign Up</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">First name</label>
            <div class="col-md-4">
                <input id="fname" name="fname" type="text" placeholder="First name" class="form-control input-md" >

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="ln">Last name</label>
            <div class="col-md-4">
                <input id="lname" name="lname" type="text" placeholder="Last name" class="form-control input-md" >

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>
            <div class="col-md-4">
                <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" >

            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Password</label>
            <div class="col-md-4">
                <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md">

            </div>
        </div>



        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="add1">Address</label>
            <div class="col-md-4">
                <input id="address" name="address" type="text" placeholder="Address" class="form-control input-md" >

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="city">City</label>
            <div class="col-md-4">
                <input id="city" name="city" type="text" placeholder="City" class="form-control input-md" >

            </div>
        </div>


        <!-- Multiple Radios (inline) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="gender">Please select a gender</label>
            <div class="col-md-4">
                <label class="radio-inline" for="gender1">
                    <input type="radio" name="gender" id="gender1" value="male">
                    Male
                </label>
                <label class="radio-inline" for="gender2">
                    <input type="radio" name="gender" id="gender2" value="female">
                   Female
                </label>
            </div>
        </div>

        <!-- Submit -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <input type="submit" id="submit" name="submit" class="btn btn-primary">
            </div>
        </div>

    </fieldset>
</form>
