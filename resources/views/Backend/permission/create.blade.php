@extends('Backend.Partials.layouts.app')
@section('title', 'Post Create')

@section('main-content')
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">
			<div class="row">
				@include('includes.messages')

				<form role="form" action="{{ route('permission.store') }}" class="form-horizontal" method="post">
					{{ csrf_field() }}
					<div class="col-sm-12">
						<div class="card-box m-t-30">
							<div class="form-group m-t-30">
								<label class="col-md-2 control-label">متن</label>
								<div class="col-md-10">
									<input type="text" name="name" class="form-control" placeholder="یک متن نومنه">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label" for="for"> دسترسی</label>
								<div class="col-md-10">
									<select name="for" id="for" class="form-control">
										<option selected disable>انتخاب کن دسترسی برای</option>
										<option value="user">کاربر</option>
										<option value="post">نوشته</option>
										<option value="product">محصول</option>
										<option value="other">دیگر</option>
									</select>
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