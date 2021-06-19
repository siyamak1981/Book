@extends('admin.layouts.app')
@section('title', 'banner')
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
        {{-- @can('products.create', Auth::user()) --}}
          <a class='col-lg-offset-5 btn btn-shalishow' href="{{ route('banner.create') }}">Add New</a>
          @include('includes.messages')
        {{-- @endcan --}}
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
                          <th>Slug</th>
                          <th>Alt</th>
                          <th>Like</th>
                          <th>Status</th>
                          <th>Sort_Order</th>
                          <th class="text-center">Image</th>
                          <th>Creatd At</th>
                          {{-- @can('products.update',Auth::user()) --}}
                          <th>Edit</th>
                          {{-- @endcan --}}
                           {{-- @can('products.delete', Auth::user()) --}}
                          <th>Delete</th>
                          {{-- @endcan --}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($banners as $banner)
                          <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $banner->title }}</td>
                            <td>{{ $banner->alt }}</td>
                            <td>{{ $banner->slug }}</td>
                            <td>{{ $banner->link }}</td>
                            <td>{{ $banner->status }}</td>
                            <td>{{ $banner->sort_order }}</td>
                            <td class="text-center"><img src ="{{Storage::disk('local')->url('banners/'.$banner->image)}}" width=70></td>
                            <td>{{ date("d F Y",strtotime($banner->created_at))}}</td>


                            {{-- @can('products.update',Auth::user()) --}}
                              <td><a href="{{ route('banner.edit',$banner->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                            {{-- @endcan --}}

                            {{-- @can('products.delete', Auth::user()) --}}
                            <td>
                              <form id="delete-form-{{ $banner->id }}" method="post" action="{{ route('banner.destroy',$banner->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>
                              <a href="" onclick="
                              if(confirm('Are you sure, You Want to delete this?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $banner->id }}').submit();
                                  }
                                  else{
                                    event.preventDefault();
                                  }" ><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                          {{-- @endcan --}}
                          </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>S.No</th>
                          <th>Title</th>
                          <th>Slug</th>
                          <th>Alt</th>
                          <th>Like</th>
                          <th>Status</th>
                          <th>Sort_Order</th>
                          <th class="text-center">Image</th>
                          <th>Creatd At</th>
                          {{-- @can('products.update',Auth::user()) --}}
                          <th>Edit</th>
                          {{-- @endcan --}}
                           {{-- @can('products.delete', Auth::user()) --}}
                          <th>Delete</th>
                          {{-- @endcan --}}
                        </tr>
                        </tfoot>
                      </table>
                      {{$banners->links()}}
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
<script>
//   $(function () {
//     $("#example1").DataTable();
//   });
</script>
@endsection

