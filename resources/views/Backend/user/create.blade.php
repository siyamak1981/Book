@extends('admin.layouts.app')
@section('title', 'create')
@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @include('admin.layouts.pagehead')
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
              <h3 class="box-title">Add Admin</h3>
            </div>

            @include('includes.messages')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('user.store') }}" method="post"  enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="box-body">
              <div class="col-lg-offset-3 col-lg-6">
                <div class="form-group">
                  <label for="name">User Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="User Name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                  <label for="link_1">Link_1</label>
                  <input type="text" class="form-control" id="link_1" name="link_1" placeholder="Link_2" value="{{ old('link_1') }}">
                </div>
                <div class="form-group">
                  <label for="link_2">Link_2</label>
                  <input type="text" class="form-control" id="link_2" name="link_2" placeholder="Link_2" value="{{ old('link_2') }}">
                </div>
                <div class="form-group">
                  <label for="link_3">Link_3</label>
                  <input type="text" class="form-control" id="link_3" name="link_3" placeholder="Link_4" value="{{ old('link_3') }}">
                </div>
                <div class="form-group">
                  <label for="link_4">Link_4</label>
                  <input type="text" class="form-control" id="link_4" name="link_4" placeholder="Link_4" value="{{ old('link_4') }}">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" value="{{ old('phone') }}">
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="password" value="{{ old('password') }}">
                </div>

                <div class="form-group">
                  <label for="password_confirmation">Confirm Passowrd</label>
                  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="confirm passowrd">
                </div>
               <div class="form-group">
                 <label for="">Avator</label>
                 <input type="file" class="form-control-file" name="image" id="image" placeholder="Avator" aria-describedby="fileHelpId">
                 <small id="fileHelpId" class="form-text text-muted">Help text</small>
               </div>

                <div class="form-group">
                  <label for="confirm_passowrd">Status</label>
                  <div class="checkbox">
                    <label ><input type="checkbox" name="status" @if (old('status') == 1)
                      checked
                    @endif value="1">Active</label>
                  </div>
                </div>

                <div class="form-group">
                <label>Assign Role</label>
                <div class="row">
                  @foreach ($roles as $role)
                      <div class="col-lg-3">
                        <div class="checkbox">
                          <label ><input type="checkbox" name="role[]" value="{{ $role->id }}"> {{ $role->name }}</label>
                        </div>
                      </div>
                  @endforeach
                </div>

              <div class="form-group">
                <button type="submit" class="btn btn-shalishow">Submit</button>
                <a href='{{ route('user.index') }}' class="btn btn-warning">Back</a>
              </div>

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
  </div>
  <!-- /.content-wrapper -->
@endsection

