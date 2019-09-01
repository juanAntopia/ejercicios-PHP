<h1>Formulario</h1>

<form action="{{ action('PeliculaController@recibir') }}" method="POST">
    @csrf 

    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <br>
    <label for="">E-mail</label>
    <input type="email" name="email" id="email">

    <br>
    <input type="submit" value="Enviar">
</form>