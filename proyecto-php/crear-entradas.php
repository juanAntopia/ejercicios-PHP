	
<?php require_once('includes/redireccion.php'); ?>
	<!--cabecera-->
	<?php require_once('includes/cabecera.php'); ?>

	<!--Barra lateral-->
		
			<!--Barra lateral-->
			<?php require_once('includes/lateral.php'); ?>
			
		
	            <div id="principal">
	                <h1>Crear entradas</h1>
	                
	                <p>
	                    Añade nuevas entradas al blog para que los usuarios puedan leerlas y disfrutar de nuestro contenido.
	                </p>
	                
	                <br>
	            
	                <form action="guardar-entrada.php" method="POST">
	                    <label for="">Título</label>
	                    <input type="text" name="titulo">
	                    <?php echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'], 'titulo') : ''; ?>
	                    
	                    <label for="">Descripción</label>
	                    <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
	                    <?php echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'], 'descripcion') : ''; ?>
	                    
	                    <label for="">Categoría</label>
	                    <select name="categoria" id="">
	                        <?php 
                            
                                $categorias = conseguirCategorias($conexion); 
                                    
                                if(!empty($categorias)):
                                    while($categoria = mysqli_fetch_assoc($categorias)):
                            ?>
                                    
                                    <option value="<?= $categoria['id']; ?>">
                                        <?= $categoria['nombre']; ?>
                                    </option>
                            
                            <?php   
                            
                                    endwhile;
                                endif;
                            ?>
	                    </select>
	                    
	                    <?php echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'], 'categoria') : ''; ?>
	                    
	                    <input type="submit" value="Guardar">
	                </form>
	                
	            <?php borrarErrores(); ?>
	            
	            
	            </div>

		<?php require_once('includes/footer.php'); ?>
	
	<!--Footer-->






