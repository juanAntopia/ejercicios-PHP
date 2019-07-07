<h1>Gestión de Productos</h1>

<a href="<?= base_url ?>producto/crear" class="button button-small">Crear Producto</a>

<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == "complete"): ?>
    <strong class="alert-green">Producto registrado correctamente</strong>

<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] != "complete"): ?>
    <strong class="alert-red">Falló al registrarse el producto !!</strong>
<?php endif; ?>

<?php utils::deleteSession('producto'); ?>

<!--Borrado de producto-->
<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == "complete"): ?>
    <strong class="alert-green">Producto borrado correctamente</strong>

<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] != "complete"): ?>
    <strong class="alert-red">Falló al borrar el producto !!</strong>
<?php endif; ?>

<?php utils::deleteSession('delete'); ?>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>
<?php while($prod = $productos->fetch_object()): ?>
    <tr>
        <td><?= $prod->id; ?></td>
        <td><?= $prod->nombre; ?></td>
        <td><?= $prod->precio; ?></td>
        <td><?= $prod->stock; ?></td>
        <td>
            <a href="<?=base_url?>producto/editar&id=<?=$prod->id?>" class="button button-gestion">Editar</a>
            <a href="<?=base_url?>producto/eliminar&id=<?=$prod->id?>" class="button button-gestion button-red">Eliminar</a>
        </td>
    </tr>
<?php endwhile; ?>

</table>