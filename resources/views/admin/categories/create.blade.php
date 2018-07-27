@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
	@component('admin.components.breadcumb')
		@slot('title') Создание категории @endslot
		@slot('parent') Главная @endslot
		@slot('active') Категории @endslot
	@endcomponent
	
	<hr>

	<form action="{{ route('admin.category.store') }}" method="POST">
		{{ csrf_field() }}

		<!-- Form include -->
		@include('admin.categories.partials.form')
	</form>

</div>

@endsection