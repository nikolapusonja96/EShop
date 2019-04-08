
<div style=" width:600px; height:200px; margin-left: 500px; background-color: white;" >
    @if(session()->has('message'))
        <div class="alert alert-success" align="center">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ session()->get('message') }}
        </div>
    @endif
    <fieldset>


        <legend align="center">Delete Product</legend>


        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Brand</th>
                <th>Product Image</th>
                <th>Remove</th>
            </tr>
            </thead>
            <tbody>
            @foreach($productsShow as $productShow)
                <tr>
                    <td>
                        {{$productShow->name_product}}
                    </td>
                    <td>
                        ${{$productShow->price_product}}
                    </td>
                    <td>
                        {{$productShow->brand_product}}
                    </td>
                    <td>
                        <img src="{{asset($productShow->img_product)}}" alt="{{$productShow->description_img_product}}" width="50" height="40"/>
                    </td>
                    <td>
                        <a href="{{asset('/admin/delete-product/'.$productShow->id_product)}}">
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


