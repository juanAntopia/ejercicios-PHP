<h1>{{$titulo}}</h1>

@if(isset($pagina))
    <h3>{{$pagina}}</h3>
@endif


<a href="{{ action('PeliculaController@detalle') }}">Ir al detalle</a>

<a href="{{ route('detalle.pelicula') }}">Ir al detalle</a>