
<form class="form-horizontal" action="{{asset('/admin/insert-slider-image')}}" method="post" enctype="multipart/form-data" style="background-color: white;">
    {{csrf_field()}}
    <fieldset>

        <!-- Form Name -->
        <legend align="center">Insert Slider Image</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="descriptionSliderImage">Description Image</label>
            <div class="col-md-4">
                <input id="descriptionSliderImage" name="descriptionSliderImage" type="text" placeholder="Image Description" class="form-control input-md" required>
            </div>
        </div>

        <!-- File input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="sliderImage">Slider Image</label>
            <div class="col-md-4">
                <input type="file"  id="sliderImage" name="sliderImage"   class="form-control-file" required>
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
    <div class="alert alert-success" align="center">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{ session()->get('message') }}
    </div>
@endif

