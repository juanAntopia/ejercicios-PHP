
<h1>Todos los usuarios</h1>
<h1>Listado de usuarios</h1>
<?php
while($usuario = $todos_los_usuarios->fetch_object()):
?>    
    <?= $usuario->nombre ?> - <?= $usuario->email ?> <br>
<?php endwhile;?>