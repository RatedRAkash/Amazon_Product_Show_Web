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
            <a href="{{url('/products.create')}}" class="btn btn-danger">Add Product</a>
            <a href="{{url('/products')}}" class="btn btn-info">All Product</a>
          </p>

              <h3>Product Name: {{ $product->product_name }}</h3>
              <p>Product Description: {{ $product->product_price }}</p>

        </div>
      </div>
    </div>
  </div>
@endsection
