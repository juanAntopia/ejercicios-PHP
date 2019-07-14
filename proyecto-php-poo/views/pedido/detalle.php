<h1>Mis pedidos</h1>

<?php if (isset($_SESSION['pedido'])) : ?>
<h3>Dirección de envío</h3>
Provincia: <?= $pedido->provincia ?><br>
Ciudad: <?= $pedido->localidad ?><br>
Dirección <?= $pedido->direccion ?>
<br>
<br>

<h3>Datos del pedido:</h3>
Número de pedido: <?= $pedido->id ?> <br>
Total a pagar: <?= $pedido->coste ?> $ <br>
Productos:

<table>
    <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Unidades</th>
    </tr>

    <?php while ($producto = $productos->fetch_object()) : ?>
        <tr>
            <td>
                <?php if ($producto->imagen != null) : ?>
                    <img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" alt="" class="img-carrito">
                <?php else : ?>
                    <img src="<?= base_url ?>assets/img/camiseta.png" alt="" class="img-carrito">
                <?php endif; ?>
            </td>
            <td>
                <a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
            </td>
            <td>
                <?= $producto->precio ?>
            </td>
            <td>
                <?= $producto->unidades ?>
            </td>
        </tr>

    <?php endwhile; ?>
</table>

<?php endif; ?>