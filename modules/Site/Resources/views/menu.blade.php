<ul>
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Melhor Idade SA</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Melhor Idade SA</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            @foreach($default[0]['menu'] as $menu)
              <li>
                <a href="{{ $menu['link'] }}">{{ $menu['titulo'] }}</a>
              </li>
            @endforeach
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</ul>