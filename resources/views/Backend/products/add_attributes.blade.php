@extends('admin.layouts.app')

@section('headSection')
@section('title', 'Product Attributes')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <small>Advanced form element</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Forms</a></li>
      <li class="active">Editors</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"> Add Attribute</h3>
          </div>
        @include('includes.messages')

          <form role="form" action="{{ url('admin/add-attributes/'.$productDetailes->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="name">Product Name</label>
                 {{$productDetailes->name}}
                </div>
                <div class="form-group">
                  <label for="code">Product Code</label>
                  {{$productDetailes->product_code}}
                </div>
                <div class="form-group">
                    <div class="field_wrapper">
                        <div style="display:flex;">
                            <input type="text" name="sku[]" id ="sku"  class= "form-control" placeholder = "SKU" style="margin-right:5px;margin-bottom:5px;" value=""/>
                            <input type="text" name="weigh[]" id ="weigh"  class= "form-control" placeholder = "WEIGH" style="margin-right:5px;margin-bottom:5px;" value=""/>
                            <input type="text" name="price[]" id ="price"  class= "form-control" placeholder = "PRICE" style="margin-right:5px;margin-bottom:5px;" value=""/>
                            <input type="text" name="stock[]" id ="stock"  class= "form-control" placeholder = "STOCK" style="margin-right:5px;margin-bottom:5px;" value=""/>
                            <a href="javascript:void(0);" class="add_button" title="Add field"><button type="button" name="" id="" class="btn btn-primary" btn btn-block">Add</button></a>
                        </div>
                    </div>
                </div>

                 <input type="submit" class="btn btn-shalishow">
                 <a href='#' class="btn btn-warning">Back</a>

                </div>
            </div>
          </form>
        </div>
        <!-- /.box -->


      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Attributes</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Data Table With Full Features</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="#" class="table table-bordered table-striped">
                        <form action="{{route('attribute.edit', $productDetailes->id)}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field()}}

                        <thead>
                        <tr>
                          <th>CATEGORY ID</th>
                          <th>SKU</th>
                          <th>PRICE</th>
                          <th>WIGHE</th>
                          <th>STOCK</th>
                          <th>ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($productDetailes['attributes'] as $attribute)
                          <tr>
                              <td style="display:none;"><input type="hidden" name ="attr[]" value="{{$attribute->id}}">{{$attribute->id}}</td>
                            <td>{{$attribute->id}}</td>
                            <td><input type="text" name ="sku[]" value="{{$attribute->sku}}"></td>
                            <td><input type="text" name ="price[]" value="{{$attribute->price}}"></td>
                            <td><input type="text" name ="weigh[]" value="{{$attribute->weigh}}"></td>
                            <td><input type="text" name ="stock[]" value="{{$attribute->stock}}"></td>
                            <td>

                            <input type="submit" value="Update" class ="btn btn-shalishow">
                            <a href="{{ route('attribute.destroy',$attribute->id) }}"class="btn btn-danger"
                            ><span class="glyphicon glyphicon-trash"></span></a>
                            </td>

                          </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>CATEGORY ID</th>
                          <th>SKU</th>
                          <th>PRICE</th>
                          <th>WIGHE</th>
                          <th>STOCK</th>
                          <th>ACTION</th>
                        </tr>
                        </tfoot>
                    </form>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
</div>
<!-- /.content-wrapper -->
@endsection
@section('footerSection')
<script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>


<script>
  $(document).ready(function() {
    $(".select2").select2();
  });
</script>
@endsection


