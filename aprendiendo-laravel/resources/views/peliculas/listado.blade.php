@include('includes.header')

<!--Imprimir por pantalla-->
<h1>{{$titulo}}</h1>
<h2>{{$listado[0]}}</h2>
<p>{{ date('Y') }} </p> 

<!--Comentario con blade-->
{{--Este es un comentario con blade--}}

<!--comprobar si existe-->
{{ $director ?? 'No existe director' }}

<!--estructura del if-->
@if($titulo && count($listado) >= 5)
    <h1>El titulo existe y es este: {{$titulo}} y el listado es mayor a 5</h1>
@elseif($titulo)
    <h1>El titulo existe y es este: {{$titulo}} y el listado no es mayor a 5</h1>
@else
    <h1>No se ha cumplido la condición</h1>
@endif    

<!--bucles-->

@for($i = 1; $i<=20; $i++)
    El número es este: {{$i}} <br>
@endfor

<hr>

<?php $contador = 1; ?>
@while($contador <= 50)
    @if($contador % 2 == 0)
        Número Par {{$contador}} <br>
    @endif

    <?php $contador++; ?>
@endwhile

<hr>

@foreach($listado as $pelicula)
    <p>{{$pelicula}}</p>
@endforeach

@include('includes.footer')