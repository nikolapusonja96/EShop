<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1 align="center">My Profile</h1>
        @foreach($user as $u)
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>First Name:</strong><i> {{$u->first_name}}</i>
                        </li>
                        <li class="list-group-item">
                            <strong>Last Name:</strong><i> {{$u->last_name}}</i>
                        </li>
                        <li class="list-group-item">
                            <strong>Email:</strong><i> {{$u->mail}}</i>
                        </li>
                        <li class="list-group-item">
                            <strong>Address:</strong> {{$u->address}}
                        </li>
                        <li class="list-group-item">
                            <strong>Role:</strong><i> {{$u->role_name}}</i>
                        </li>
                        <li class="list-group-item">
                            <strong>City:</strong><i> {{$u->city}}</i>
                        </li>
                        <li class="list-group-item">
                            <strong>Gender:</strong><i> {{$u->gender}}</i>
                        </li>
                    </ul>
                </div>

            </div>
        @endforeach
    </div>
</div>