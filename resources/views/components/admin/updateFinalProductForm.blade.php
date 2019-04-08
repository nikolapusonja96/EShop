
@foreach($first as $f)
<form action="{{asset('/admin/final-update-product/'.$f->id_product)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div style=" width:600px; height:200px; margin-left: 500px; background-color: white;" >
    @if(session()->has('message'))
        <div class="alert alert-danger" align="center">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ session()->get('message') }}
        </div>
    @endif
    <fieldset>


        <legend align="center">Update Product Price and Image</legend>


        <table class="table table-bordered">

            <tbody>

                <tr>
                    <td>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="newPrice">New Price</label>
                            <div class="col-md-4">
                                <input id="newPrice" name="newPrice" type="text" placeholder="New Price" class="form-control input-md" required>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="newImage">New Image</label>
                            <div class="col-md-4">
                                <input type="file"  id="newImage" name="newImage"   class="form-control-file" required>
                            </div>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>

        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div  class="col-md-4">
                    <input type="submit" id="submit" name="submit" class="btn btn-primary">
            </div>
        </div>

</div>
</fieldset>
</div>
</form>
@endforeach

