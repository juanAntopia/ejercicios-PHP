<?php require('conexion.php'); ?>
<?php require_once 'includes/helpers.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>Blog de videojuegos</title>
</head>
<body>

	<!--Cabecera-->
		<header id="cabecera">
			<div id="logo">
				<a href="index.php">
					Blog de Videojuegos
				</a>
			</div>

			<!--Menú-->
			<?php $categorias = conseguirCategorias($conexion); ?>
			<nav id="menu">
				<ul>
					<li>
						<a href="index.php">Inicio</a>
					</li>
				    <?php 
                    if(!empty($categorias)):
                        while($categoria = mysqli_fetch_assoc($categorias)): ?>
                            <li>
                                <a href="categoria.php?id=<?=$categoria['id'];?>"><?= $categoria['nombre']; ?></a>
                            </li>
				    <?php 
                        endwhile; 
                    endif;?>
				    <li>
				        <a href="index.php">Sobre mi</a>
				    </li>
				</ul>
			</nav>

			<div class="clearfix"></div>
		</header>

		<div id="contenedor">