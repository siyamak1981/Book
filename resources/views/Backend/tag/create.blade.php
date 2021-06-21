@extends('Backend.Partials.layouts.app')
@section('title', 'Post Create')
@section('headSection')


<link href="{{asset('Backend/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}" rel="stylesheet" />
<!-- <link href="{{ asset('Backend/plugins/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('Backend/plugins/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('Backend/plugins/select2/dist/css/select2-bootstrap.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('Backend/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />
<link href="{{ asset('Backend/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />
<link href="{{ asset('Backend/plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('Backend/plugins/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('Backend/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('Backend/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet"> -->
@endsection

@section('main-content')
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">
			<div class="row">
			@include('includes.messages')
				<form class="form-horizontal" role="form" action="{{ route('tag.store')}}" method="post">
						{{ csrf_field()}}
					<div class="col-sm-12">
						<div class="card-box m-t-30">
							<div class="form-group m-t-30">
								<label class="col-md-2 control-label">متن</label>
								<div class="col-md-10">
									<input type="text" class="form-control" name= "name" placeholder="یک متن نومنه">
								</div>
							</div>
							<div class="form-group m-t-30">
								<label class="col-md-2 control-label">اسلاگ</label>
								<div class="col-md-10">
									<input type="text" class="form-control" name="slug" placeholder="یک اسلاگ نومنه">
								</div>
							</div>
							<!-- <div class="form-group m-t-30">
								<label class="col-md-2 control-label"> افزودن تگ</label>
								<div class="col-md-10">
									<div class="m-b-0">
										<select multiple data-role="tagsinput">
											<option value="Amsterdam">کلمه یک</option>
											<option value="Washington">کلمه دو</option>
											<option value="Sydney">کلمه سه</option>
										</select>
									</div>
								</div>
							</div> -->
							<div class="form-group text-right m-r-5">
								<button class="btn btn-primary waves-effect waves-light" type="submit">
									ورود
								</button>
								<button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
									برگشت
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div><!-- end row -->
	</div>
</div><!-- end col -->

@endsection
@section('footerSection')

<!-- <script src="{{ asset('Backend/plugins/switchery/switchery.min.js') }}"></script> -->
<script src="{{ asset('Backend/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
<!-- <script type="text/javascript" src="{{ asset('Backend/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
<script type="text/javascript" src="{{ asset('Backend/plugins/jquery-quicksearch/jquery.quicksearch.js') }}"></script>
<script src="{{ asset('Backend/plugins/select2/dist/js/select2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Backend/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Backend/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Backend/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('Backend/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('Backend/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('Backend/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('Backend/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('Backend/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script> -->


@endsection