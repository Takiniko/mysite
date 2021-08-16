@extends('layouts.app')

@section('title-block')
Сообщения
@endsection

@section('content')
<h1>Все сообщения</h1>
	@foreach($data as $el)
		<div class="alert alert-info">
			<H3>{{ $el->subject }}</H3>
			<p>{{ $el->email }}</p>
			<p><small>{{ $el->created_at }}</small></p>
			<a href="{{route('contact-data-one', $el->id)}}"><button class="btn btn-warning">Детальнее</button></a>
		</div>
	@endforeach
@endsection

