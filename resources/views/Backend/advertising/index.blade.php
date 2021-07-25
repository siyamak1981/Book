@extends('Backend.Partials.layouts.app')

@section('main-content')
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container">
      <div class="row">
        @include('includes.messages')
        <div class="col-sm-12">
          <div class="panel">
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="m-b-30">

                    <a href="{{ route('advertisings.create') }}" id="addToTable" class="btn btn-primary waves-effect waves-light">افزودن <i class="fa fa-plus"></i></a>

                  </div>
                </div>
              </div>

              <div class="editable-responsive">
                <div id="datatable-editable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="dataTables_length" id="datatable-editable_length"><label>Show <select name="datatable-editable_length" aria-controls="datatable-editable" class="form-control input-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                          </select> entries</label></div>
                    </div>
                    <div class="col-sm-6">
                      <div id="datatable-editable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-editable"></label></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <table class="table table-striped dataTable no-footer" id="datatable-editable" role="grid" aria-describedby="datatable-editable_info">
                        <thead>
                          <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="موتور جستجو: activate to sort column descending" style="width: 157px;">موتور جستجو</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="سیستن عامل: activate to sort column ascending" style="width: 194px;">متن</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="سیستن عامل: activate to sort column ascending" style="width: 194px;">تصویر</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="سیستن عامل: activate to sort column ascending" style="width: 194px;">وضعیت انتشار</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" aria-label="سیستن عامل: activate to sort column ascending" style="width: 194px;">تاریخ انتشار</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="فعالیت" style="width: 88px;">فعالیت</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($advs as $adv)
                          <tr class="gradeX odd" role="row">
                            <td class="sorting_1">{{ $loop->index + 1 }}</td>

                            <td>{{ $adv->title}}
                            </td>

                            <td>{!! htmlspecialchars_decode($adv->body) !!}</td>
                            <td><img src="{{Storage::disk('local')->url('advertising/'.$adv->image)}}" width=50></td>
                            <td>@if($adv->status) فعال @else غیر فعال @endif</td>
                            <td>{{ date("d F Y",strtotime($adv->created_at))}}</td>
                            <td class="actions">
                              <a href="{{ route('advertising.edit',$adv->id) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                              @can('posts.delete', Auth::user())
                              <form id="delete-form-{{ $adv->id }}" method="post" action="{{ route('advertising.destroy',$adv->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>
                              <a href="#" class="on-default remove-row" onclick="
                                                            if(confirm('Are you sure, You Want to delete this?'))
                                                                {
                                                                    event.preventDefault();
                                                                    document.getElementById('delete-form-{{ $adv->id }}').submit();
                                                                }
                                                                else{
                                                                    event.preventDefault();
                                                                }"><i class="fa fa-trash-o"></i></a>
                              @endcan
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="dataTables_info" id="datatable-editable_info" role="status" aria-live="polite">Showing 1 to 10 of 80 entries</div>
                    </div>
                    <div class="col-sm-6">
                      <div class="dataTables_paginate paging_simple_numbers" id="datatable-editable_paginate">
                        <ul class="pagination">
                          <li class="paginate_button previous disabled" aria-controls="datatable-editable" tabindex="0" id="datatable-editable_previous"><a href="#">Previous</a></li>
                          <li class="paginate_button active" aria-controls="datatable-editable" tabindex="0"><a href="#">1</a></li>
                          <li class="paginate_button " aria-controls="datatable-editable" tabindex="0"><a href="#">2</a></li>
                          <li class="paginate_button " aria-controls="datatable-editable" tabindex="0"><a href="#">3</a></li>
                          <li class="paginate_button disabled" aria-controls="datatable-editable" tabindex="0" id="datatable-editable_ellipsis"><a href="#">…</a></li>
                          <li class="paginate_button " aria-controls="datatable-editable" tabindex="0"><a href="#">8</a></li>
                          <li class="paginate_button next" aria-controls="datatable-editable" tabindex="0" id="datatable-editable_next"><a href="#">Next</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end: panel body -->

          </div> <!-- end panel -->
        </div> <!-- end col-->
      </div>
    </div> <!-- end panel -->
  </div> <!-- end col-->
</div>
@endsection