<aside id="sidebar">
        
        
            <div id="buscador" class="bloque">
                <h3>Buscar</h3>
                
                <form action="buscar.php" method="post">
                    <input type="text" name="busqueda">
                    <input type="submit" value="Buscar">
                </form>
            </div>
        
        
			<?php if(isset($_SESSION['usuario'])): ?>
				<div id="usuario-logueado" class="bloque">
					<h3>Bienvenido <?= $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']; ?></h3>
					<!--Botones-->
					<a href="crear-entradas.php" class="boton boton-verde">Crear entradas</a>
					<a href="crear-categoria.php" class="boton">Crear categoría</a>
					<a href="mis-datos.php" class="boton boton-naranja">Mis datos</a>
					<a href="cerrar.php" class="boton boton-rojo">Cerrar sesión</a>
					
				</div>
			<?php endif; ?>
                
                
			<?php if(!isset($_SESSION['usuario'])): ?>

				<div id="login" class="bloque">
					<h3>Identíficate</h3>
					<?php if(isset($_SESSION['error_login'])): ?>
						<div class="alerta alerta-error">
							<h3><?= $_SESSION['error_login']; ?></h3>
						</div>
					<?php endif; ?>

					<form action="login.php" method="POST">
						<label for="email">Email</label>
						<input type="email" name="email" id="">

						<label for="password">Contraseña</label>
						<input type="password" name="password" id="">

						<input type="submit" value="Entrar">
					</form>
				</div>

				<div id="register" class="bloque">
				
					<h3>Regístrate</h3>
					<?php if(isset($_SESSION['completado'])): ?>
						<div class="alerta alerta-exito">
							<?= $_SESSION['completado']; ?>
						</div>

					<?php elseif(isset($_SESSION['errores']['general'])) : ?>
						<div class="alerta alerta-error">
							<?= $_SESSION['errores']['general']; ?>
						</div>	
					<?php endif; ?>

					<form action="registro.php" method="POST">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" id="">
						<?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'nombre') : '' ; ?>

						<label for="apellidos">Apellidos</label>
						<input type="text" name="apellidos" id="">
						<?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'apellidos') : ''; ?>

						<label for="email">Email</label>
						<input type="email" name="email" id="">
						<?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'email') : ''; ?>

						<label for="password">Contraseña</label>
						<input type="password" name="password" id="">
						<?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'password') : ''; ?>

						<input type="submit" value="Entrar" name="submit">
					</form>

					<?php borrarErrores(); ?>
				</div>
				
				<?php endif; ?>
			</aside>