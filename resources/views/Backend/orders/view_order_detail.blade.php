@extends('admin.layouts.app')
@section('title', 'OrderDetail')
@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection
@section('main-content')
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
            <h3 class="box-title">Order #{{$orderDetails->id}}</h3>
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
                        <div class="box-body">
                        <div class="row">
                        <div class="col-xs-12" style = "overflow: auto;">
                            <table id="example1" class="table table-bordered table-striped">
                                <h4>Order Details</h4>
                                <thead>
                                <tr>
                                <th>Order Date</th>
                                <th>Order Status</th>
                                <th>Order Total</th>
                                <th>Shipping Charges</th>
                                <th>Coupon Code</th>
                                <th>Coupon Amount</th>
                                <th>Peyment Method</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>{{$orderDetails->created_at}}</td>
                                    <td>{{$orderDetails->order_status}}</td>
                                    <td>{{$orderDetails->grand_total}}</td>
                                    <td>{{$orderDetails->shipping_charges}}</td>
                                    <td>{{$orderDetails->coupon_code}}</td>
                                    <td>{{$orderDetails->coupon_amount}}</td>
                                    <td>{{$orderDetails->payment_method}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-6" style = "overflow: auto;">
                            <table id="example1" class="table table-bordered table-striped">
                                <h4>Customer Details</h4>
                                <thead>
                                <tr>
                                    <th>Customer FirstName</th>
                                    <th>Customer LastName</th>
                                    <th>Customer Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$orderDetails->first_name}}</td>
                                        <td>{{$orderDetails->last_name}}</td>
                                        <td>{{$orderDetails->user_email}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-6">
                            <h4>Shipping Address Update</h4>
                        <form action="{{url('admin/update_order_status')}}" method = "post">{{csrf_field()}}
                        <input type="hidden" name = "order_id" value = "{{$orderDetails->id}}">

                        <select class="form-control select2 select2-hidden-accessible" name="order_status" id="order_status" style="width: 100%;">
                        <option value="New" @if($orderDetails->order_status == "New") selected @endif>New</option>
                        <option value="Pending" @if($orderDetails->order_status == "Pending") selected @endif>Pending</option>
                        <option value="IN Process" @if($orderDetails->order_status == "IN Process") selected @endif>IN Process</option>
                        <option value="Shipped" @if($orderDetails->order_status == "Shipped") selected @endif>Shipped</option>
                        <option value="Delivered" @if($orderDetails->order_status == "Delivered") selected @endif>Delivered</option>
                        <option value="Cancelled" @if($orderDetails->order_status == "Cancelled") selected @endif>Cancelled</option>
                        <option value="Paid" @if($orderDetails->order_status == "Paid") selected @endif>Paid</option>
                        </select>
                            <input type="submit" class = "btn btn-shalishow" style= 'margin-top:8px;' value = "Update"></td>
                        </form>
                        </div>
                        <div class="col-xs-12" style = "overflow: auto;">
                            <table id="example1" class="table table-bordered table-striped">
                                <h4>Billing Address</h4>
                                <thead>
                                <tr>
                                <th>Phone</th>
                                <th>Province</th>
                                <th>City</th>
                                <th>Address 1</th>
                                <th>Address 2</th>
                                <th>PineCode</th>

                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>{{$orderDetails->phone}}</td>
                                    <td>{{$orderDetails->province}}</td>
                                    <td>{{$orderDetails->city}}</td>
                                    <td>{{$orderDetails->address_1}}</td>
                                    <td>{{$orderDetails->address_2}}</td>
                                    <td>{{$orderDetails->pincode}}</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-12" style = "overflow: auto;">
                            <table id="example1" class="table table-bordered table-striped">
                                <h4>Billing Address</h4>
                                <thead>
                                <tr>
                                <th>Product Code</th>
                                <th>Product Name</th>
                                <th>Product Weight</th>
                                <th>Product Price</th>
                                <th>Product Qty</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orderDetails->orders as $pro)
                                    <tr>
                                    <td>{{$pro->product_code}}</td>
                                    <td>{{$pro->product_name}}</td>
                                    <td>{{$pro->product_weigh}}</td>
                                    <td>{{$pro->product_price}}</td>
                                    <td>{{$pro->product_qty}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
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

