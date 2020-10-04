@extends('layouts.app')

@section('content')

<div class="row">
	<div class='col-md-6'>
		@include('profile.general', [
			'user' => $user
		])
	</div>
	<div class='col-md-6'>
		@include('profile.details', [
			'user' => $user
		])
	</div>

</div>

@endsection