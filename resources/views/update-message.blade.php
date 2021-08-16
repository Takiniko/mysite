@extends('layouts.app')

@section('title-block')
Обновление записи
@endsection

@section('content')
<h1>Обновление записи</h1>

	<form action="{{route('contact-update-submit', $data->id)}}" method="post">
		@csrf
		<div class="form-group">
			<label for="name">Введите имя:</label>
			<input type="text" name="name" value="{{$data->name}}" placeholder="Введите имя" id="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="email">Введите email:</label>
			<input type="text" name="email" value="{{$data->email}}" placeholder="Введите email" id="email" class="form-control">
		</div>
		<div class="form-group">
			<label for="subject">Введите тему сообщения:</label>
			<input type="text" name="subject" value="{{$data->subject}}" placeholder="Введите тему сообщения" id="subject" class="form-control">
		</div>
		<div class="form-group">
			<label for="message">Введите сообщение:</label>
			<textarea type="text" name="message" placeholder="Введите сообщение" id="message" class="form-control">{{$data->message}}</textarea>
		</div>
		<button type="submit" class="btn btn-success ">Обновить</button>
	</form>
@endsection