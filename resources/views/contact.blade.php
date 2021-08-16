@extends('layouts.app')

@section('title-block')
Contact
@endsection

@section('content')
<h1>Контактная стрница</h1>

	<form action="{{route('contact-form')}}" method="post">
		@csrf
		<div class="form-group">
			<label for="name">Введите имя:</label>
			<input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="email">Введите email:</label>
			<input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
		</div>
		<div class="form-group">
			<label for="subject">Введите тему сообщения:</label>
			<input type="text" name="subject" placeholder="Введите тему сообщения" id="subject" class="form-control">
		</div>
		<div class="form-group">
			<label for="message">Введите сообщение:</label>
			<textarea type="text" name="message" placeholder="Введите сообщение" id="message" class="form-control"></textarea>
		</div>
		<button type="submit" class="btn btn-success ">Отправить</button>
	</form>
@endsection