
<div style=" width:600px; height:200px; margin-left: 500px; background-color: white;" >
    @if(session()->has('message'))
        <div class="alert alert-success" align="center">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ session()->get('message') }}
        </div>
    @endif
    <fieldset>


        <legend align="center">Delete Slider Image</legend>


                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Slider Image</th>
                        <th>Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($slider as $s)
                    <tr>
                        <td>
                           <img src="{{asset($s->path)}}" alt="{{$s->alt}}" width="50" height="40"/>
                        </td>
                        <td>
                            <a href="{{asset('admin/delete-slider-image/'.$s->id_slider)}}">
                                 <input type="submit" id="submit" name="submit" value="Delete" class="btn btn-primary">
                            </a>
                        </td>

                    </tr>

                    @endforeach
                    </tbody>
                </table>
             </div>
    </fieldset>
</div>


