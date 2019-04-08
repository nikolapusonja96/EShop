
<div class="row" align="center">
    <div class="col-md-8 col-md-offset-2" align="center">
        <h1>User Activities: </h1>  {{$activities->links()}}
            <div class="panel panel-default" style="margin-left: 130px;">
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($activities as $activity)
                            <li class="list-group-item">
                                <strong>IP:</strong> <i>{{$activity->ip}}</i> ||<strong> Time: </strong><i> {{$activity->created_at}}</i> ||  <strong> Route:</strong><i> {{$activity->route}}</i>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="panel-footer">
                </div>
            </div>

    </div>
</div>