@extends('admin.layouts.app')

@section('headSection')
@section('title', 'Product Images')
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

          <form role="form" action="{{ url('admin/add-images/'.$productDetailes->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
          <input type="hidden" name = "product_id" value="{{$productDetailes->id}}">
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
                <div class="form-group">
                <label for="image">Upload:</label>
                <input type="file" class="form-control-file" name="image[]" id="image" placeholder="Image" multiple = "multiple" aria-describedby="fileHelpId">
                <small id="fileHelpId" class="form-text text-muted">Enter your file</small>
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
                        <thead>
                        <tr>
                          <th> ID</th>
                          <th>PRODUCT ID</th>
                          <th>IMAGE</th>
                          <th>ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($productImages as $productImage)
                          <tr>
                            <td>{{ $productImage->id }}</td>
                            <td>{{ $productImage->product_id }}</td>
                            <td><img src="{{Storage::disk('local')->url('products/multiImage/'.$productImage->image)}}" width="70"></td>

                            <td>
                                <form id="delete-form-{{ $productImage->id }}" method="post" action="{{ url('admin/delete-alt-images/'.$productImage->id) }}" style="display: none">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                  </form>
                                  <a href="" onclick="
                                  if(confirm('Are you sure, You Want to delete this?'))
                                      {
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $productImage->id }}').submit();
                                      }
                                      else{
                                        event.preventDefault();
                                      }" ><span class="glyphicon glyphicon-trash" title="">
                            </td>

                          </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th> ID</th>
                            <th>PRODUCT ID</th>
                            <th>IMAGE</th>
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


