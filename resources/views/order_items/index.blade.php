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
                <th>ID</th>
                <th>Order Id</th>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Qty</th>
                <th>Product Size</th>
                <th>Product Price</th>
                <th>Created At</th>
                {{-- <th>Action</th> --}}
              </tr>
            </thead>

            <tbody>

              @foreach ($order_items as $order_item)
              <tr>
                <td>{{ $order_item->id }}</td>
                <td>{{$order_item->order_id}}</td>
                <td>{{$order_item->product_id}}</td>
                <td>{{ $order_item->product_name }}</td>
                <td>{{ $order_item->qty }}</td>
                <td>{{ $order_item->product_size }}</td>
                <td>{{ $order_item->product_price }}</td>
                <td>{{ $order_item->created_at }}</td>
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

