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
								<label class="col-md-2 control-label">نقش</label>
								<div class="col-md-10">
									<input type="text" name="name" class="form-control" placeholder="یک متن نومنه">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label class="col-sm-2 control-label">دسترسی نوشته </label>
									<div class="col-sm-4">
										<div class="checkbox checkbox-pink">
											@foreach($permissions as $permission)
											@if($permission->for == 'post')
											<input id="checkbox1" name="permission[]" value="{{ $permission->id }}" type="checkbox" data-parsley-multiple="groups" data-parsley-mincheck="2">
											<label for="checkbox1"> {{ $permission->name }} </label>
											@endif
											@endforeach
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">دسترسی کاربر </label>
									<div class="col-sm-4">
										<div class="checkbox checkbox-pink">
											@foreach($permissions as $permission)
											@if($permission->for == 'user')
											<input id="checkbox1" name="permission[]" value="{{ $permission->id }}" type="checkbox" data-parsley-multiple="groups" data-parsley-mincheck="2">
											<label for="checkbox1"> {{ $permission->name }} </label>
											@endif
											@endforeach
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">دسترسی محصول </label>
									<div class="col-sm-4">
										<div class="checkbox checkbox-pink">
											@foreach($permissions as $permission)
											@if($permission->for == 'product')
											<input id="checkbox1" name="permission[]" value="{{ $permission->id }}" type="checkbox" data-parsley-multiple="groups" data-parsley-mincheck="2">
											<label for="checkbox1"> {{ $permission->name }} </label>
											@endif
											@endforeach
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">دسترسی دیگر </label>
									<div class="col-sm-4">
										<div class="checkbox checkbox-pink">
											@foreach($permissions as $permission)
											@if($permission->for == 'other')
											<input id="checkbox1" name="permission[]" value="{{ $permission->id }}" type="checkbox" data-parsley-multiple="groups" data-parsley-mincheck="2">
											<label for="checkbox1"> {{ $permission->name }} </label>
											@endif
											@endforeach
										</div>
									</div>
								</div>
						
							</div>
							<div class="form-group text-right m-r-5">
								<button class="btn btn-primary waves-effect waves-light" type="submit">
									ورود
								</button>
								<a href="{{ route('role.index') }}" type="reset" class="btn btn-default waves-effect waves-light m-l-5">
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