<div class="form-group row">
	<label for="" class="col-sm-2 col-form-label">Статус</label>
	<div class="col-sm-10">
		<select name="published" id="" class="">
			@if (isset($category->id))
				<option value="0" @if ($category->published == 0) seelected="" @endif> Не опубликовано</option>
				<option value="1" @if ($category->published == 1) seelected="" @endif> Опубликовано</option>
			@else
				<option value="0"> Не опубликовано</option>
				<option value="1"> Опубликовано</option>
			@endif
		</select>
	</div>
</div>

<div class="form-group row">
	<label for="" class="col-sm-2 col-form-label">Наименование</label>
	<div class="col-sm-10">
		<input type="text" name="title" placeholder="Заголовок категории" value="{{ $category->title or ""}}" required="">
	</div>
</div>

<div class="form-group row">
	<label for="" class="col-sm-2 col-form-label">slug</label>
	<div class="col-sm-10">
		<input type="text" name="slug" value="{{ $category->slug or ""}}" placeholder="Автоматическая генерация" readonly="">
	</div>
</div>

<div class="form-group row">
	<label for="" class="col-sm-2 col-form-label">Родительская категория</label>
	<div class="col-sm-10">
		<select name="parent_id" id="" class="">
				<option value="0">-- Без родительской категории</option>
				@include('admin.categories.partials.categories', ['categories'=>$categories])
		</select>
	</div>
</div>

<hr>

<input class="btn btn-primary" type="submit" value="Сохранить">