@if(count($errors) > 0)
@foreach($errors->all() as $error)

<div class="alert alert-danger">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>پیام! </strong> {{$error}}
</div>
@endforeach
@endif

@if (session()->has('message'))
<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>پیام! </strong> {{ session('message') }}
</div>
@endif

<!-- 

@if (session('alert'))
<div class="alert alert-danger">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Title! </strong> {{ session('alert') }}
</div>
@endif -->

