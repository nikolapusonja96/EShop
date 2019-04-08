
<div style=" width:600px; height:200px; margin-left: 500px; background-color: white;" >
    @if(session()->has('message'))
        <div class="alert alert-success" align="center">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ session()->get('message') }}
        </div>
    @endif
    <fieldset>


        <legend align="center">Update Product</legend>


        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Brand</th>
                <th>Product Image</th>
                <th>Update</th>
            </tr>
            </thead>
            <tbody>
            @foreach($productsUpdateShow as $updateProduct)
                <tr>
                    <td>
                        {{$updateProduct->name_product}}
                    </td>
                    <td>
                        ${{$updateProduct->price_product}}
                    </td>
                    <td>
                        {{$updateProduct->brand_product}}
                    </td>
                    <td>
                        <img src="{{asset($updateProduct->img_product)}}" alt="{{$updateProduct->description_img_product}}" width="50" height="40"/>
                    </td>
                    <td>
                        <a href="{{asset('/admin/update-product/'.$updateProduct->id_product)}}">
                             <button class="btn btn-primary">Update</button>
                        </a>
                    </td>

                </tr>

            @endforeach
            </tbody>
        </table>
</div>
</fieldset>
</div>


