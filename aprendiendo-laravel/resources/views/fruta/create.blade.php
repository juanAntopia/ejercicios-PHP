@if (isset($fruta) && is_object($fruta))
    <h1>Editar fruta</h1>
@else    
    <h1>Crear fruta</h1>
@endif

<form action="{{ isset($fruta) ? action('FrutaController@update') : action('FrutaController@save') }}" method="POST">
    @csrf

    @if (isset($fruta) && is_object($fruta))
        <input type="hidden" name="id" value="{{ $fruta->id }}">
    @else    
        <h1>Crear fruta</h1>
    @endif

    <input type="text" name="nombre" id="nombre" placeholder="nombre" value="{{ $fruta->nombre ?? '' }}">

    <br>

    <textarea name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Descripción">
        {{ $fruta->descripcion ?? '' }}
    </textarea>
    
    <br>

    <input type="text" name="precio" id="precio" value="{{ $fruta->precio ?? '' }}" placeholder="precio">

    <br>
    <input type="submit" value="Guardar">
</form>