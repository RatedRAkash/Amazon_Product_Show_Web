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
          @if(!Auth::guest())
                <a href="{{url('/products.create')}}" class="btn btn-danger">Add Product</a>
          @endif
                <a href="{{url('/products')}}" class="btn btn-info">All Products</a>

                    <div class="sidebar">

                        <h10 class="sidebar-title">Search</h10>
                        <div class="sidebar-item search-form">
                            <form action="{{url('/products.search')}}">
                                <input type="text" name="query">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </form>
            <br>

            <form name="sortProducts" id="sortProducts" class="form-horizontal span6" action="{{url('/products.sort')}}">
                <div class="control-group">
                    <label class="control-label alignL">Sort By</label>
                    <select name="sort" id="sort">
                        <option value="default">Default</option>
                        <option value="product_lowest">Lowest Price First</option>
                        <option value="product_highest">Highest Price First</option>
                        <option value="product_a_to_z">Sort A to Z</option>
                        <option value="product_z_to_a">Sort Z to A</option>

                    </select>
                    <button type="submit"><i class="icofont-search"></i></button>
                </div>
            </form>


          </p>

            <table class="table table-responsive">
                <tr>
                    <th>ID No.</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Image</th>
                </tr>

                @foreach ($products as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->product_name }}</td>
                    <td>{{ $row->product_price }} tk</td>

                    <td><a href="{{ $row->product_link }}" target="_blank"><img src="{{ URL::to($row->image) }}" style="height: 40px; width: 70px"></td></a>


                  </td>
                </tr>
                @endforeach
            </table>


      </div>
    </div>
  </div>

@endsection
