@extends('layouts.admin-layout')
@section('admin_content')

<div class="col-lg-6">
  <div class="card">
    <div class="card-header">
      <strong>Basic Form</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="/brands" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="row form-group">
          {{ csrf_field() }}
        </div>
        <div class="row form-group">
          <div class="col col-md-3"><label for="brand_name" class=" form-control-label"> Brand Name</label></div>
          <div class="col-12 col-md-9"><input type="text" id="brand_name" name="brand_name" placeholder="Enter brand Name" class="form-control">
          </div>
        </div>
        
        

        <div class="row form-group">
          <div class="col col-md-3"><label for="brand_des" class=" form-control-label">Brand Description</label></div>
          <div class="col-12 col-md-9"><textarea name="brand_des" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
        </div>
        
        
        
        
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label">  Status</label></div>
          <div class="col col-md-9">
            <div class="form-check">
              <div class="radio">
                <label for="activation_status" class="form-check-label ">
                  <input type="radio" id="activation_status" name="activation_status" value="1" class="form-check-input"> Active
                </label>
              </div>
              <div class="radio">
                <label for="activation_status" class="form-check-label ">
                  <input type="radio" id="activation_status" name="activation_status" value="0" class="form-check-input"> Inactive
                </label>
              </div>
              
            </div>
          </div>
        </div>
        
        
        <div class="card-footer">
          <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
          </button>
          <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
          </button>
        </div>
      </div>

      @endsection

