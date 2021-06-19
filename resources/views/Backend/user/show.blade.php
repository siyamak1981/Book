@extends('admin.layouts.app')
@section('title', 'users')
@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    @include('admin.layouts.pagehead')
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
        <h3 class="box-title">Admin</h3>
        @can('users.create', Auth::user())
        <a class='col-lg-offset-5 btn btn-shalishow' href="{{ route('user.create') }}">Add New</a>
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
                          <th>User Name</th>
                          <th>Link_1</th>
                          <th>Link_2</th>
                          <th>Link_3</th>
                          <th>Link_4</th>
                          <th>Assigned Roles</th>
                          <th>Status</th>
                          <th class="text-center">Avator</th>
                          @can('users.update',Auth::user())
                          <th>Edit</th>
                          @endcan
                          @can('users.delete', Auth::user())
                          <th>Delete</th>
                          @endcan
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                              <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->link_1 }}</td>
                                <td>{{ $user->link_2 }}</td>
                                <td>{{ $user->link_3 }}</td>
                                <td>{{ $user->link_4 }}</td>
                                <td>
                                  @foreach ($user->roles as $role)
                                    {{ $role->name }},
                                  @endforeach
                                </td>
                                <td>{{ $user->status? 'Active' : 'Not Active' }}</td>
                                <td class="text-center"><img src ="{{Storage::disk('local')->url('avators/'.$user->image)}}" width=70></td>
                                @can('users.update',Auth::user())
                                <td><a href="{{ route('user.edit',$user->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                                @endcan
                                @can('users.delete', Auth::user())
                                  <td>
                                    <form id="delete-form-{{ $user->id }}" method="post" action="{{ route('user.destroy',$user->id) }}" style="display: none">
                                      {{ csrf_field() }}
                                      {{ method_field('DELETE') }}
                                    </form>
                                    <a href="" onclick="
                                    if(confirm('Are you sure, You Want to delete this?'))
                                        {
                                          event.preventDefault();
                                          document.getElementById('delete-form-{{ $user->id }}').submit();
                                        }
                                        else{
                                          event.preventDefault();
                                        }" ><span class="glyphicon glyphicon-trash"></span></a>
                                  </td>

                                @endcan
                              </tr>
                            @endforeach
                            </tbody>
                        <tfoot>
                        <tr>
                          <th>S.No</th>
                          <th>User Name</th>
                          <th>Link_1</th>
                          <th>Link_2</th>
                          <th>Link_3</th>
                          <th>Link_4</th>
                          <th>Assigned Roles</th>
                          <th>Status</th>
                          <th class="text-center">Avator</th>

                          @can('users.update',Auth::user())
                          <th>Edit</th>
                          @endcan
                          @can('users.delete', Auth::user())
                          <th>Delete</th>
                          @endcan
                        </tr>
                        </tfoot>
                      </table>
                      {!! $users->links() !!}
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
