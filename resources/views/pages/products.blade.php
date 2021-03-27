@extends('layouts.mainLayout')

@section('content')

<br>
<br>
<br>
<br>
<br>
<br>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <p>
                <a href="{{url('/product/create')}}" class="btn btn-danger">Add Project</a>
                <a href="{{url('/products')}}" class="btn btn-info">All Projects</a>
            </p>

          <hr>

          <form action="{{url('/products')}}" method="post" enctype="multipart/form-data">
          @csrf

            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Product Name</label>
                <input type="text" class="form-control" placeholder="Project Name" name="project_name" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>


            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Product Image</label>
                <input type="file" class="form-control" placeholder="Image" name="image" required >
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Product Description</label>
                <textarea rows="5" class="form-control" placeholder="Details" name="project_description" required data-validation-required-message="Please enter a details."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" id="sendMessageButton">Save</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
