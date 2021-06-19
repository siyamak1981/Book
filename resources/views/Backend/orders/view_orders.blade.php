@extends('admin.layouts.app')
@section('title', 'Orders')
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

  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Orders</h3>
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
                      @include('includes.messages')
                    </div>
                    <div class="box-body" style = "overflow: auto;">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Fisrt Name</th>
                            <th>Last Name</th>
                            <th>Customer Email</th>
                            <th>Ordered</th>
                            <th> Amount</th>
                            <th>Status</th>
                            <th>Payment By</th>
                            <th>Order Date</th>
                            <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr class="gradeX">
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->first_name }}</td>
                            <td>{{ $order->last_name }}</td>
                            <td>{{ $order->user_email }}</td>
                            <td>
                            @foreach($order->orders as $pro)
                            {{$pro->product_code}}
                            ({{$pro->product_qty}})
                            <br>
                            @endforeach
                            </td>
                            <td>{{ $order->grand_total }}</td>
                            <td>{{ $order->order_status }}</td>
                            <td>{{ $order->payment_method }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td class="center">
                            <a target="_blank" href="{{route('product.orderdetail',$order->id)}}" class="btn btn-shalishow" >Order Details</a>
                        </td>
                        </div>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Fisrt Name</th>
                                <th>Last Name</th>
                                <th>Customer Email</th>
                                <th>Ordered</th>
                                <th> Amount</th>
                                <th>Status</th>
                                <th>Payment By</th>
                                <th>Order Date</th>
                                <th>Actions</th>
                                </tr>
                        </tfoot>
                      </table>

                    </div>
                    <!-- /.box-body -->
        </div>
      </div>
    </div>
  </section>

</div>

@endsection

@section('footerSection')
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

@endsection

