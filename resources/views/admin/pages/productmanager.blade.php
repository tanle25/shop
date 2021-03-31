@extends('dashboard')
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with minimal features & hover style</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                    <div class="input-group input-group-lg col-12">
                        <input id="search" type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                        <div class="col-2"></div>
                        <a href="{{ route('addproduct') }}" class="btn btn-block btn-success btn-lg col-2"><i class="fas fa-plus"></i> Add Product</a>
                    </div>
                </div>

              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Price</th>
                  <th>Promotion Price</th>
                  <th style="width: 50px">Action</th>
                </tr>
                </thead>
                <tbody>

                    @foreach ($data as $product )
                    <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td> <img src="{{asset ('image/'.json_decode($product->images)[0])}}" width="100" /> </td>
                    <td > {{ $product->price }}</td>
                    <td>{{ $product->promotion_price }}</td>
                    <td class="text-right py-0 align-middle">
                        <div class="btn-group btn-group-sm">
                          <a href="product-manager/edit/{{$product->id}}" class="btn btn-info"><i class="fas fa-pen"></i></a>
                          <a href="#" id="{{ $product->id }}" class="btn btn-danger data_id" data-toggle="modal" data-target="#modal-default"><i class="fas fa-trash"></i></a>
                        </div>
                      </td>
                  </tr>
                    @endforeach


                </tbody>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Promotion Price</th>
                    <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Product</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
              <a id="del" href="product-manager/delete/" type="button" class="btn btn-danger">Delete</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
  </section>
@endsection
@section('js')
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endsection
