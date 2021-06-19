@extends('admin.layouts.app')
@section('title', 'create')
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
            <h3 class="box-title">Titles</h3>
          </div>
        @include('includes.messages')

          <form role="form" action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="title">Banner Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                </div>

                <div class="form-group">
                  <label for="slug">Banner Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                </div>

                <div class="form-group">
                  <label for="alt">Alt</label>
                  <input type="text" name="alt" id="alt" class="form-control" placeholder="Alt" aria-describedby="helpId">

              </div>
              <div class="form-group">
                <label for="sort_order">Sort_Order</label>
                <input type="number" name="sort_order" id="sort_order" class="form-control" placeholder="Sort_Order" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" name="link" id="link" class="form-control" placeholder="http://example.com" aria-describedby="helpId">
            </div>
              </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="pull-left">
                                  <label for="image">File input</label>
                                  <input type="file" name="image" id="image">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                                <div class="checkbox pull-left">
                                    <label>
                                        <input type="checkbox" name="status" value="1"> Publish
                                    </label>
                                </div>
                        </div>
                        </div>

            <!-- /.box-body -->

            <div class="box">
             <div class="box-header">
               <h3 class="box-title">Write Banner Body Here
                 <small>Simple and fast</small>
               </h3>
               <!-- tools box -->
               <div class="pull-right box-tools">
                 <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                   <i class="fa fa-minus"></i></button>
                 </div>
                 <!-- /. tools -->
               </div>
               <!-- /.box-header -->
               <div class="box-body pad">
                 <textarea name="body" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1"></textarea>
               </div>
             </div>

             <div class="box-footer">
              <input type="submit" class="btn btn-shalishow">
              <a href='{{route('banner.index')}}' class="btn btn-warning">Back</a>
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


