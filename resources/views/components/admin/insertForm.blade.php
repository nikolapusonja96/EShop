
<form class="form-horizontal" action="{{asset('/admin/insertProduct')}}" method="post" enctype="multipart/form-data" style="background-color: white;">
    {{csrf_field()}}
    <fieldset>

        <!-- Form Name -->
        <legend align="center">Insert Product</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="productName">Product Name</label>
            <div class="col-md-4">
                <input id="productName" name="productName" type="text" placeholder="Product Name" class="form-control input-md" required>

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="priceProduct">Product Price</label>
            <div class="col-md-4">
                <input id="productPrice" name="productPrice" type="text" placeholder="Product Price" class="form-control input-md" required>

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="productBrand">Brand</label>
            <div class="col-md-4">
                <input id="productBrand" name="productBrand" type="text" placeholder="Product Brand" class="form-control input-md" required>

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="productBracelet">Bracelet</label>
            <div class="col-md-4">
                <input id="productBracelet" name="productBracelet" type="text" placeholder="Bracelet" class="form-control input-md" required>

            </div>
        </div>



        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="add1">Bracelet Color</label>
            <div class="col-md-4">
                <input id="productBraceletColor" name="productBraceletColor" type="text" placeholder="Bracelet color" class="form-control input-md" required>

            </div>
        </div>

        <!-- File input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="productImage">Product Image</label>
            <div class="col-md-4">
                <input type="file"  id="productImage" name="productImage"   class="form-control-file" required>

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="add1">Description Image</label>
            <div class="col-md-4">
                <input id="descImage" name="descImage" type="text" placeholder="Image Description" class="form-control input-md" required>

            </div>
        </div>

        <!--DropDown List-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="productCategory">Product Category</label>
            <div class="col-md-4">
                 <select class="form-control" name="productCategory" id="productCategory" required>
                     <option value="0">Choose... </option>
                     <option value="2">Men's watch</option>
                     <option value="1">Women's watch</option>
                 </select>
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
@if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{ session()->get('message') }}
    </div>
@endif
