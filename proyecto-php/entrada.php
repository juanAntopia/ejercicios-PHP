<?php require_once('includes/conexion.php'); ?>
  <?php require_once('includes/helpers.php'); ?>
   <?php 
    $entrada_actual = conseguirEntrada($conexion, $_GET['id']);
    
    if(!isset($entrada_actual['id'])){
        header("Location: index.php");
    }
?>
                
                		
<?php require_once('includes/redireccion.php'); ?>
	<!--cabecera-->
	<?php require_once('includes/cabecera.php'); ?>

	<!--Barra lateral-->
		
			<!--Barra lateral-->
			<?php require_once('includes/lateral.php'); ?>
			
		
	            <div id="principal">
                
               
	                <h1>Entrada actual <?= $entrada_actual['titulo']; ?> </h1>
	                <a href="categoria.php?id=<?=$entrada_actual['categoria_id']; ?>">
	                    <h2><?= $entrada_actual['categoria']; ?></h2>
	                </a> 
	                <h6><?= $entrada_actual['fecha']; ?> | <?= $entrada_actual['usuario']; ?></h6>   
	                <h3><?= $entrada_actual['titulo']; ?> </h3>
	                <p>
	                    <?= $entrada_actual['descripcion']; ?>
	                </p>
	                
	                <br>
	                
	                <p>
	                
                        <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']): ?>

                            <a href="editar-entradas.php?id=<?=$entrada_actual['id'];?>" class="boton boton-verde">Editar entrada</a>
                            <a href="borrar-entrada.php?id=<?=$entrada_actual['id'];?>" class="boton">Eliminar entrada</a>

                        <?php endif; ?>
	                
	                </p>
	            
	            </div>

		<?php require_once('includes/footer.php'); ?>
	
	<!--Footer-->






