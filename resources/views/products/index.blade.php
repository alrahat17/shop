@extends('layouts.admin-layout')
@section('admin_content')

<div class="content mt-3">

  <div class="row">


    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <strong class="card-title">Data Table</strong>
        </div>

        <div class="card-body">

          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>

                <th>Image</th>
                <th>Category</th>
                <th>Item</th>
                <th>Brand</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>                        
                <th>Size</th>                        
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>

              @foreach ($products as $product)
              <tr>



                <td class=""><img style="height:45px;width: 60px;" src="{{$product->product_img}}" /></td>
                <td>{{$product->category->category_name}}</td>
                <td>{{$product->item->item_name}}</td>
                <td>{{$product->brand->brand_name}}</td>
                <td>{{$product->product_name}}</td>
                <td>{{$product->product_des}}</td>
                <td>{{$product->product_price}}</td>
                <td>{{$product->product_size}}<br>{{$product->product_size2}}<br>{{$product->product_size3}}<br>{{$product->product_size4}}</td>

                <td>
                  @if ($product->activation_status==1)
                  <span class="success">Active</span>

                  @else($product->activation_status==0)
                  <span class="warning">Inactive</span>
                  @endif
                </td>



                <td class="center">
                  @if ($product->activation_status==1)
                  <a class="warning" href="{{ URL::to('/inactive_product/'.$product->product_id) }}">
                    <button class="btn btn-white"><i class="fa fa-thumbs-down" aria-hidden="true" style="color: orange"></i></button>

                  </a>
                  @else($product->activation_status==0)
                  <a class="success" href="{{ URL::to('/active_product/'.$product->product_id) }}">
                    <button class="btn btn-white"><i class="fa fa-thumbs-up" aria-hidden="true" style="color: green"></i></button>
                  </a>
                  @endif


                  <a class="edit" href="{{'/products/'.$product->product_id.'/edit' }}">
                    <button class="btn btn-white"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:blue"></i></button>
                  </a>

                  <form method="post" action="{{ route('products.destroy', $product->product_id)}}">
                    @csrf
                    @method('delete')

                    <a class="delete" href="{{'/products/'.$product->product_id}}">
                      <button class="btn btn-white" type="submit" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash-o" aria-hidden="true" style="color:red"></i></button>
                    </a>

                  </form>

                </td>
              </tr>

            </tr>

            @endforeach
          </tbody>
        </table>

      </div>
    </div>
  </div>


</div>



</div><!-- .content -->


</div><!-- /#right-panel -->

<script src="{{asset('shop_back/js/lib/data-table/datatables.min.js')}}"></script>
<script src="{{asset('shop_back/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('shop_back/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('shop_back/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('shop_back/js/lib/data-table/jszip.min.js')}}"></script>
<script src="{{asset('shop_back/js/lib/data-table/pdfmake.min.js')}}"></script>
<script src="{{asset('shop_back/js/lib/data-table/vfs_fonts.js')}}"></script>
<script src="{{asset('shop_back/js/lib/data-table/buttons.html5.min.js')}}"></script>
<script src="{{asset('shop_back/js/lib/data-table/buttons.print.min.js')}}"></script>
<script src="{{asset('shop_back/js/lib/data-table/buttons.colVis.min.js')}}"></script>
<script src="{{asset('shop_back/js/lib/data-table/datatables-init.js')}}"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#bootstrap-data-table-export').DataTable();
  } );
</script>

@endsection

