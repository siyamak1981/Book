@extends('Backend.Partials.layouts.app')
@section('title', 'Post Create')

@section('main-content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                @include('includes.messages')
                <form class="form-horizontal" role="form" method="post" action="{{ route('subcategory.update',$subcategory->id) }}">
                    {{ csrf_field()}}
                    {{ method_field('PUT') }}
                    <div class="col-sm-12">
                        <div class="card-box m-t-30">
                            <div class="form-group m-t-30">
                                <label class="col-md-2 control-label">زیر مجموعه</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="subcategory_name" value="{{ $subcategory->subcategory_name }}" name="subcategory_name" placeholder="یک  کتگوری">
                                </div>
                            </div>
                            <div class="form-group m-t-30">
                                <label class="col-md-2 control-label">زیر مجموعه</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="category_id">

                                        <option> --- نام کتگوری را وارد کنید --- </option>
                                        @foreach($category as $row)
                                        <option value="{{ $row->id }}" <?php if ($row->id == $subcategory->category_id) {
                                                                            echo "selected";
                                                                        } ?>>{{ $row->name }} </option>
                                        @endforeach

                                      

                                    </select>

                                </div>
                            </div>
                            <div class="form-group text-right m-r-5">
                                <button class="btn btn-primary waves-effect waves-light" type="submit">
                                    ورود
                                </button>
                                <a href="{{ route('subcategory.index') }}" type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                    برگشت
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- end row -->
    </div>
</div><!-- end col -->

@endsection