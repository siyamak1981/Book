@extends('Backend.Partials.layouts.app')
@section('title', 'Post Create')

@section('main-content')
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">
			<div class="row">
				@include('includes.messages')

				<form role="form" action="{{ route('role.store') }}" class="form-horizontal" method="post">
					{{ csrf_field() }}
					<div class="col-sm-12">
						<div class="card-box m-t-30">
							<div class="form-group m-t-30">
								<label class="col-md-2 control-label">متن</label>
								<div class="col-md-10">
									<input type="text" name="name" class="form-control" placeholder="یک متن نومنه">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label class="col-sm-2 control-label">کمترین انتخاب</label>
									<div class="col-sm-4">
										<div class="checkbox checkbox-pink">
											<input id="checkbox1" type="checkbox" data-parsley-multiple="groups" data-parsley-mincheck="2">
											<label for="checkbox1"> متن اول </label>
										</div>
										<div class="checkbox checkbox-pink">
											<input id="checkbox2" type="checkbox" data-parsley-multiple="groups" data-parsley-mincheck="2">
											<label for="checkbox2"> متن دوم </label>
										</div>

									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">کمترین انتخاب</label>
									<div class="col-sm-4">
										<div class="checkbox checkbox-pink">
											<input id="checkbox4" type="checkbox" data-parsley-multiple="group1">
											<label for="checkbox4"> متن اول </label>
										</div>
										<div class="checkbox checkbox-pink">
											<input id="checkbox5" type="checkbox" data-parsley-multiple="group1">
											<label for="checkbox5"> متن دوم </label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">کمترین انتخاب</label>
									<div class="col-sm-4">
										<div class="checkbox checkbox-pink">
											<input id="checkbox1" type="checkbox" data-parsley-multiple="groups" data-parsley-mincheck="2">
											<label for="checkbox1"> متن اول </label>
										</div>
										<div class="checkbox checkbox-pink">
											<input id="checkbox2" type="checkbox" data-parsley-multiple="groups" data-parsley-mincheck="2">
											<label for="checkbox2"> متن دوم </label>
										</div>

									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">کمترین انتخاب</label>
									<div class="col-sm-4">
										<div class="checkbox checkbox-pink">
											<input id="checkbox4" type="checkbox" data-parsley-multiple="group1">
											<label for="checkbox4"> متن اول </label>
										</div>
										<div class="checkbox checkbox-pink">
											<input id="checkbox5" type="checkbox" data-parsley-multiple="group1">
											<label for="checkbox5"> متن دوم </label>
										</div>
									</div>
								</div>
							</div>



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










<!-- 
	<div class="col-lg-3">
	<label for="name">Post Permission</label>
 @foreach ($permissions as $permission)
										@if ($permission->for == 'post')
										<div class="checkbox checkbox-pink">
		<input id="checkbox4" type="checkbox" data-parsley-multiple="group1">
		<label for="checkbox4"> متن اول </label>
	</div>
	<div class="checkbox">
		<label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
	</div>
@endif
										@endforeach
</div>
<div class="col-lg-3">
	<label for="name">User Permission</label>
	@foreach ($permissions as $permission)
	@if ($permission->for == 'user')
	<div class="checkbox">
		<label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
	</div>
	@endif
	@endforeach
</div>
<div class="col-lg-3">
	<label for="name">Product Permission</label>
	@foreach($permissions as $permission)
	@if($permission->for == 'product')
	<div class="checkbox">
		<label for="name"><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{ $permission->name }}</label>
	</div>
	@endif
	@endforeach
</div>
<div class="col-lg-3">
	<label for="name">Other</label>
	@foreach ($permissions as $permission)
	@if ($permission->for == 'other')
	<div class="checkbox">
		<label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
	</div>
	@endif
	@endforeach
</div>
-->