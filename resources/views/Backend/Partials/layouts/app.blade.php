<!DOCTYPE html>
<html lang="en" dir="rtl">
    <head>
		@include('Backend.Partials._head')

	</head>
<body class="fixed-left">
	<div id="wrapper">
		@include('Backend.Partials._topbar')
		@include('Backend.Partials._sidebar')
		@section('main-content')
		@show
		@include('Backend.Partials._footer')
	</div>
</body>