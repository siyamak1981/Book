@extends('admin.layouts.app')
@section('title', 'abouts')
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
        {{-- @can('abouts.create', Auth::user()) --}}
          <a class='col-lg-offset-5 btn btn-shalishow' href="{{ route('about.create') }}">Add New</a>
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
                          <th>Sub Title</th>
                          <th>Status</th>
                          <th>Slug</th>
                          <th>Creatd At</th>
                          {{-- @can('abouts.update',Auth::user()) --}}
                          <th>Edit</th>
                          {{-- @endcan --}}
                           {{-- @can('abouts.delete', Auth::user()) --}}
                          <th>Delete</th>
                          {{-- @endcan --}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($abouts as $about)
                          <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $about->title }}</td>
                            <td>{{ $about->subtitle }}</td>
                            <td>{{ $about->status== '1'?'Publish' : 'Draft' }}</td>
                            <td>{{ $about->slug }}</td>
                            <td>{{ date("d F Y",strtotime($about->created_at))}}</td>


                            {{-- @can('abouts.update',Auth::user()) --}}
                              <td><a href="{{ route('about.edit',$about->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                            {{-- @endcan --}}

                            {{-- @can('abouts.delete', Auth::user()) --}}
                            <td>
                              <form id="delete-form-{{ $about->id }}" method="post" action="{{ route('about.destroy',$about->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>
                              <a href="" onclick="
                              if(confirm('Are you sure, You Want to delete this?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $about->id }}').submit();
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
                          <th>Sub Title</th>
                          <th>Status</th>
                          <th>Slug</th>
                          <th>Creatd At</th>
                          {{-- @can('abouts.update',Auth::user()) --}}
                          <th>Edit</th>
                          {{-- @endcan --}}
                           {{-- @can('abouts.delete', Auth::user()) --}}
                          <th>Delete</th>
                          {{-- @endcan --}}
                        </tr>
                        </tfoot>
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
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('footerSection')
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

@endsection
