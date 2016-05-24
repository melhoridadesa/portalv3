@extends('admin::layouts.master')

@section('menu')
	@foreach ($menus as $menu)
		<li>
			<a href="{{ $menu->link }}">{{ $menu->titulo }}</a>
		</li>
	@endforeach
@stop