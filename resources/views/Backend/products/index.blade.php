@extends('admin.layouts.app')

@section('title', 'products')
@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Blank page
      <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Title</h3>
        @can('products.create', Auth::user())
          <a class='col-lg-offset-5 btn btn-shalishow' href="{{ route('product.create') }}">Add New</a>
          @endcan
          @include('includes.messages')
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
                    <div class="box-body" style = "overflow: auto;">
                      <table id="#" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Title</th>
                          <th>Sub Title</th>
                          <th>Slug</th>
                          <th>Price</th>
                          <th>Discount</th>
                          <th>Product Code</th>
                          <th class="text-center">Image</th>
                          <th>Creatd At</th>
                          <th>Images</th>
                          @can('products.update',Auth::user())
                          <th>Attributes</th>
                          <th>Edit</th>
                          @endcan
                           @can('products.delete', Auth::user())
                          <th>Delete</th>
                          @endcan
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                          <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->subtitle }}</td>
                            <td>{{ $product->slug }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->discount }}</td>
                            <td>{{ $product->product_code }}</td>
                            <td class="text-center"><img src ="{{Storage::disk('local')->url('products/'.$product->image)}}" width=70></td>
                            <td>{{ date("d F Y",strtotime($product->created_at))}}</td>


                            <td><a href="{{ url('admin/add-images/'.$product->id) }}" title="ADD Images"><span class="glyphicon glyphicon-camera"></span></a></td>
                            <td><a href="{{ url('admin/add-attributes/'.$product->id) }}" title="List Attr"><span class="glyphicon glyphicon-list"></span></a></td>
                            @can('products.update',Auth::user())
                              <td><a href="{{ route('product.edit',$product->id) }}" title="Edit"><span class="glyphicon glyphicon-edit"></span></a></td>
                            @endcan

                            @can('products.delete', Auth::user())
                            <td>
                              <form id="delete-form-{{ $product->id }}" method="post" action="{{ route('product.destroy',$product->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>
                              <a href="" onclick="
                              if(confirm('Are you sure, You Want to delete this?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $product->id }}').submit();
                                  }
                                  else{
                                    event.preventDefault();
                                  }" ><span class="glyphicon glyphicon-trash" title="Delete"></span></a>
                            </td>
                          @endcan
                          </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>S.No</th>
                          <th>Title</th>
                          <th>Sub Title</th>
                          <th>Slug</th>
                          <th>Price</th>
                          <th>Discount</th>
                          <th>Product Code</th>
                          <th class="text-center">Image</th>
                          <th>Creatd At</th>
                          <th>Images</th>
                          <th>Attributes</th>
                          @can('products.update',Auth::user())
                          <th>Edit</th>
                          @endcan
                           @can('products.delete', Auth::user())
                          <th>Delete</th>
                          @endcan
                        </tr>
                        </tfoot>
                      </table>
                {{$products->links()}}
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
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('footerSection')
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

@endsection
