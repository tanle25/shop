@extends('dashboard')
@section('css')

@endsection
@section('content')

    <!-- Main content -->
    <section class="content">

        <form class="row" id="product-form" enctype="multipart/form-data" action="{{ route('update',$data->id) }}"
            method="POST">
            @csrf
            <!-- general form elements -->
            <div class="card card-primary col-md-9">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Product Name</label>
                        <input type="text" required class="form-control" id="name" name="product_name"
                            placeholder="Product Name" value="{{ $data->name??null }}">
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="exampleInputEmail1">Price</label>
                            <input name="price" class="form-control" id="price" placeholder="Price" value="{{ $data->price ?? null}}"/>
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1">Promotion Price</label>
                            <input type="text" name="promotion" id="promotion" class="form-control"
                                placeholder="Promotion Price" value="{{ $data->promotion_price ?? null}}">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label>Color</label>
                            <select class="select2" name="color[]" multiple="multiple" data-placeholder="Select color"
                                style="width: 100%;">
                                <option>Red</option>
                                <option>Black</option>
                                <option>Green</option>
                                <option>Yellow</option>
                                <option>White</option>
                            </select>
                        </div>

                    <div class="form-group col">
                        <label>Size</label>
                        <select class="select2" name="size[]" multiple="multiple" data-placeholder="Select size"
                            style="width: 100%;">
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>Xl</option>
                            <option>XXL</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="file-loading">
                        <input id="file-1" type="file" name="images[]" multiple class="file"
                            data-browse-on-zone-click="true" data-overwrite-initial="false" data-min-file-count="2"
                            data-theme="fas">
                    </div>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea id="summernote" name="description" >
                        {{ $data->description??null }}
                      </textarea>
                  </div>
            </div>


            </div>

            <div class="card card-success col-md-3">
                <div class="card-header">
                    <h3 class="card-title">Different Height</h3>
                </div>
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-primary">Quit</button>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </form>
    </section>
    <!-- /.content -->

@endsection
