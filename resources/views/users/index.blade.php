@if(Session::has('buy_success'))
		{!!Session::get('buy_success')!!}
@endif
@if(Session::has('buy_not_success'))
		{!!Session::get('buy_not_success')!!}
@endif

@extends('users.master')

@section('content')
<script type="text/javascript">
	$(document).ready(function(){
		$('.home').addClass('active');
	});
</script>
	@include('users/content')
@endsection