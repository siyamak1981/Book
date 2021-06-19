@extends('admin.layouts.app')
@section('title', 'CouponCreate')
@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Text Editors
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
            <h3 class="box-title">Create Coupon</h3>
          </div>
        @include('includes.messages')

          <form role="form" action="{{ route('coupon.update', $coupon->id) }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            {{ method_field('PATCH') }}
            <div class="box-body">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="coupon_code">Coupon Code</label>
                <input type="text" class="form-control" id="coupon_code" name="coupon_code" placeholder="Coupon Code" value="{{$coupon->coupon_code}}">
                </div>

                <div class="form-group">
                  <label for="amount">Amount</label>
                <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount" value="{{$coupon->amount}}">
                </div>
                <div class="form-group">
                  <label for="amount_type">Amount Type</label>
                    <select class="form-control select2 select2-hidden-accessible" name = "amount_type" id="amount_type" multiple="" data-placeholder="Select Amount Type" style="width: 100%;" tabindex="-1" aria-hidden="true">
                        <option value="Percentage" @if($coupon->amount_type == "Percentage") selected @endif >Percentage</option>
                        <option value="Fixed" @if($coupon->amount_type == "Fixed") selected @endif>Fixed</option>
                    </select>

                </div>
                <div class="form-group">
                  <label for="expiry_date">Expired Date</label>
                  <input type="date" class="form-control" id="expiry_date" name="expiry_date" placeholder="ExpiredDate" value="{{$coupon->expiry_date}}">
                </div>

              </div>
              <div class="col-lg-6">
                            <br>
                              <div class="form-group">
                                <div class="checkbox pull-left">
                                  <label>
                                    <input type="checkbox" name="status" value="1" @if($coupon->status=="1")
                                       {{'checked'}}
                                    @endif> Publish
                                  </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="submit" class="btn btn-shalishow">
                        <a href='{{ route('coupon.index') }}' class="btn btn-warning">Back</a>
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
</div>
<!-- /.content-wrapper -->
@endsection
@section('footerSection')
<script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{  asset('admin/ckeditor/ckeditor.js') }}"></script>
<script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
    });
</script>
<script>
  $(document).ready(function() {
    $(".select2").select2();
  });
</script>
@endsection


