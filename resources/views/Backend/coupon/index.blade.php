@extends('admin.layouts.app')
@section('title', 'Coupon')
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
        <h3 class="box-title">Coupon</h3>
        {{-- @can('coupon.create', Auth::user()) --}}
        <a class='col-lg-offset-5 btn btn-shalishow' href="{{ route('coupon.create') }}">Add New</a>
      {{-- @endcan --}}
        <br>
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
                            <th>coupon_code</th>
                            <th>status</th>
                            <th>amount</th>
                            <th>amount_type</th>
                            <th>expiry_date</th>
                            <th>Creatd At</th>
                          {{-- @can('posts.update',Auth::user()) --}}
                          <th>Edit</th>
                          {{-- @endcan --}}
                           {{-- @can('posts.delete', Auth::user()) --}}
                          <th>Delete</th>
                          {{-- @endcan --}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($coupons as $coupon)
                          <tr>
                            <td>{{ $coupon->id  }}</td>
                            <td>{{ $coupon->coupon_code }}</td>
                            <td>{{ $coupon->status== '1'?'Publish' : 'Draft' }}</td>
                            <td>
                                {{ $coupon->amount }}
                                @if($coupon->amount_type == "Percentage") % @else PKR @endif
                            </td>
                            <td>{{ $coupon->amount_type }}</td>
                            <td>{{ date("d F Y",strtotime($coupon->expiry_date))}}</td>
                            <td>{{ date("d F Y",strtotime($coupon->created_at))}}</td>



                            {{-- @can('coupon.update',Auth::user()) --}}
                              <td><a href="{{ route('coupon.edit',$coupon->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                            {{-- @endcan --}}

                            {{-- @can('posts.delete', Auth::user()) --}}
                            <td>
                              <form id="delete-form-{{ $coupon->id }}" method="post" action="{{ route('coupon.destroy',$coupon->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>
                              <a href="" onclick="
                              if(confirm('Are you sure, You Want to delete this?'))
                                  {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $coupon->id }}').submit();
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
                          <th>coupon_code</th>
                          <th>status</th>
                          <th>amount</th>
                          <th>amount_type</th>
                          <th>expiry_date</th>

                          <th>Creatd At</th>
                          {{-- @can('posts.update',Auth::user()) --}}
                          <th>Edit</th>
                          {{-- @endcan --}}
                           {{-- @can('posts.delete', Auth::user()) --}}
                          <th>Delete</th>
                          {{-- @endcan --}}
                        </tr>
                        </tfoot>
                      </table>
                {{-- {{$coupon->links()}} --}}
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
