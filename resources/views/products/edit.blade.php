@extends('layouts.admin-layout')
@section('admin_content')

<div class="col-lg-6">
  <div class="card">
    <div class="card-header">
      <strong>Basic Form</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="{{url('/products/'.$product->product_id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="row form-group">
          {{ csrf_field() }}
          {{method_field('PUT')}}
        </div>



        <div class="row form-group">
          <div class="col col-md-3"><label for="product_name" class=" form-control-label"> Product Name</label></div>
          <div class="col-12 col-md-9"><input type="text" id="product_name" name="product_name" value="{{$product->product_name}}" class="form-control">
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="product_des" class=" form-control-label">Product Description</label></div>
          <div class="col-12 col-md-9"><textarea name="product_des" id="textarea-input" rows="9"  class="form-control">{{$product->product_des}}</textarea></div>
        </div>



        <div class="row form-group">
          <div class="col col-md-3"><label for="product_price" class=" form-control-label"> Price</label></div>
          <div class="col-12 col-md-9"><input type="number" id="product_price" name="product_price" value="{{$product->product_price}}" class="form-control">
          </div>
        </div>


<div class="card-footer">
  <button type="submit" class="btn btn-primary btn-sm">
    <i class="fa fa-dot-circle-o"></i> Submit
  </button>
  <a href="/products" class="btn btn-danger btn-sm">
    <i class="fa fa-ban"></i> Reset
  </a>
</div>
</div>

@endsection

