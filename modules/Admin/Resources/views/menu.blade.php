@extends('admin::layouts.master')

@section('menu')
<ul>
	@foreach ($menus as $menu)
		<li>
			<a href="{{ $menu->link }}">{{ $menu->titulo }}</a>
		</li>
	@endforeach
</ul>
@stop