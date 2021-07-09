@extends('Backend.Partials.layouts.app')
@section('title', 'Post Create')

@section('main-content')
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">
			<div class="row">
			@include('includes.messages')
				<form class="form-horizontal" role="form" method="post" action="{{ route('coupon.store') }}">
						{{ csrf_field()}}
					<div class="col-sm-12">
						<div class="card-box m-t-30">
							<div class="form-group m-t-30">
								<label class="col-md-2 control-label">کد کوپن</label>
								<div class="col-md-10">
									<input type="text" class="form-control"  name="coupon" placeholder="کد کوپن">
								</div>
							</div>
							<div class="form-group m-t-30">
								<label class="col-md-2 control-label">درصد تخفیف</label>
								<div class="col-md-10">
									<input type="text" class="form-control" name="discount" placeholder="درصد تخفیف">
								</div>
							</div>
							<div class="form-group text-right m-r-5">
								<button class="btn btn-primary waves-effect waves-light" type="submit">
									ورود
								</button>
								<a href="{{ route('coupon.index') }}" type="reset" class="btn btn-default waves-effect waves-light m-l-5">
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
