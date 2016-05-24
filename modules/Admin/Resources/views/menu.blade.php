@foreach ($default[0]['menu'] as $menu)
	<li>
		<a href="{{ $menu['link'] }}">{{ $menu['titulo'] }}</a>
	</li>
@endforeach
