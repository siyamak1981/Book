@extends('admin.layouts.app')
@section('title', 'create')
@section('main-content')
	<div class="content-wrapper">
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
	  <section class="content">
	    <div class="row">
	      <div class="col-md-12">
	        <div class="box box-primary">
	          <div class="box-header with-border">
	            <h3 class="box-title">Titles</h3>
	          </div>
            @include('includes.messages')
	          <form role="form" action="{{ route('tag.store')}}" method="post">
						{{ csrf_field()}}
	            <div class="box-body">
	            <div class="col-lg-offset-3 col-lg-6">
	              <div class="form-group">
	                <label for="name">Tag title</label>
	                <input type="text" class="form-control" id="name" name="name" placeholder="Tag Title">
	              </div>
	              <div class="form-group">
	                <label for="slug">Tag Slug</label>
	                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
	              </div>
	            <div class="form-group">
	              <button type="submit" class="btn btn-shalishow">Submit</button>
	              <a href='{{route('tag.index')}}' class="btn btn-warning">Back</a>
	            </div>
	            </div>
				</div>
	          </form>
	        </div>
	      </div>
	    </div>
	  </section>
	</div>
@endsection
