<ul>
	@foreach ($menus as $menu)
		<li>
			<a href="{{ $menu->link }}">{{ $menu->titulo }}</a>
		</li>
	@endforeach
</ul>