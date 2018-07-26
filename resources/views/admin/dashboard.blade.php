@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-3">
			<div class="jumbotron text-center">
				<label>Категорий 0</label>
			</div>
		</div>
		<div class="col-3">
			<div class="jumbotron text-center">
				<label>Материалов 0</label>
			</div>
		</div>
		<div class="col-3">
			<div class="jumbotron text-center">
				<label>Посетителей 0</label>
			</div>
		</div>
		<div class="col-3">
			<div class="jumbotron text-center">
				<label>Сегодня 0</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-6">
			<a class="btn btn-primary" href="#" role="button">Добавить категорию</a>
			<ul class="list-group">
				<a href="#" class="list-group-item list-group-item-action">
					<h4>Категория 1</h4>
					<p>Количество материалов</p>
				</a>
			</ul>
		</div>
		<div class="col-6">
			<a class="btn btn-primary" href="#" role="button">Добавить материал</a>
			<ul class="list-group">
				<a href="#" class="list-group-item list-group-item-action">
					<h4>Материал 1</h4>
					<p>Категория</p>
				</a>
			</ul>
		</div>
	</div>
</div>

@endsection